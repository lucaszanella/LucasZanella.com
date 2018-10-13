#!/bin/sh

if [ "$1" = "use_nginx" ]; then

echo "Installing letsencrypt certs. A webserver must be running."

mkdir -p /var/www/html

certbot certonly --webroot --webroot-path /var/www/html --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

elif [ "$1" = "standalone" ]; then

echo "Standalone installation, no webserver must be running (default option)"

certbot certonly --standalone --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

elif [ "$1" = "standalone_test" ]; then

echo "Standalone installation, no webserver must be running (default option)"

certbot certonly --standalone --staging --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

else

echo "Assuming certs are already installed, only running background renewing jobs."

fi
