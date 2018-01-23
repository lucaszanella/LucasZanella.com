FROM php:7.0-apache
 
ARG CREATE_NEW_CERT

RUN a2enmod rewrite && a2enmod ssl
 
RUN echo 'deb http://ftp.debian.org/debian jessie-backports main' | tee /etc/apt/sources.list.d/backports.list \
    && apt-get update && apt-get install -y python-certbot-apache -t jessie-backports

RUN  if [ "$CREATE_NEW_CERT" = "yes" ] ; then certbot certonly --non-interactive --standalone --agree-tos --email me@lucaszanella.com  --cert-name lucaszanella.com --domains lucaszanella.com; fi

RUN echo '<VirtualHost _default_:443>\n\
	ServerName lucaszanella.com:443\n\
	ServerAdmin webmaster@localhost\n\
	DocumentRoot "/var/www/html"\n\
	SSLEngine on\n\
	SSLCertificateFile    /etc/letsencrypt/live/lucaszanella.com/cert.pem\n\
	SSLCertificateKeyFile /etc/letsencrypt/live/lucaszanella.com/privkey.pem\n\
	SSLCertificateChainFile /etc/letsencrypt/live/lucaszanella.com/fullchain.pem\n\
</VirtualHost>' > /etc/apache2/sites-enabled/default-ssl.conf
