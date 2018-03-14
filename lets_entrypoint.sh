if [ ! -f /etc/letsencrypt/live/lucaszanella.com/cert.pem ] then 

certbot certonly --webroot --webroot-path /var/www/html --non-interactive --agree-tos --email me@lucaszanella.com --cert-name lucaszanella.com --domains lucaszanella.com; 

echo '<VirtualHost _default_:443>\n\
        ServerName lucaszanella.com:443\n\
        ServerAdmin webmaster@localhost\n\
        DocumentRoot "/var/www/html"\n\
        SSLEngine on\n\
        SSLCertificateFile    /etc/letsencrypt/live/lucaszanella.com/cert.pem\n\
        SSLCertificateKeyFile /etc/letsencrypt/live/lucaszanella.com/privkey.pem\n\
        SSLCertificateChainFile /etc/letsencrypt/live/lucaszanella.com/fullchain.pem\n\
</VirtualHost>' > /etc/apache2/sites-enabled/default-ssl.conf

fi
