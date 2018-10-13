#!/bin/sh

if [ "$1" = "webroot" ]; then

echo "Installing letsencrypt certs. A webserver must be running."

mkdir -p /var/www/html

certbot certonly --webroot --webroot-path /var/www/html --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

elif [ "$1" = "standalone" ]; then

echo "Standalone installation, no webserver must be running (default option)"

certbot certonly --standalone --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

elif [ "$1" = "standalone_test" ]; then

echo "Standalone installation, no webserver must be running (default option)"

certbot certonly --standalone --staging --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS

elif [ "$1" = "renew" ]; then

echo "Starting container in renew mode. In this mode it just waits for the renew cron to run"

echo "0 0 * * 1,4 certbot certonly --webroot --webroot-path /var/www/html --force-renewal --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS" >> mycron && crontab -l -u root | cat - mycron | crontab -u root -

tail -f /dev/null

else

echo "Assuming certs are already installed, only running background renewing jobs."

fi
