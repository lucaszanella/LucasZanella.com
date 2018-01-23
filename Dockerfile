FROM php:7.0-apache

ARG CREATE_NEW_CERT

RUN a2enmod rewrite && a2enmod ssl

RUN echo 'deb http://ftp.debian.org/debian jessie-backports main' | tee /etc/apt/sources.list.d/backports.list \
    && apt-get update && apt-get install -y python-certbot-apache -t jessie-backports

RUN  if [ "$CREATE_NEW_CERT" = "yes" ] ; then certbot --non-interactive --agree-tos --email me@lucaszanella.com --apache  --cert-name lucaszanella.com --domains www.lucaszanella.com,lucaszanella.com; fi

