FROM ubuntu:latest

RUN apt-get update && apt-get install -y cron software-properties-common && add-apt-repository ppa:certbot/certbot && apt-get update && apt-get install -y certbot

RUN touch /var/log/cron.log

WORKDIR /home

#RUN echo "0 0 * * 1,4 certbot certonly --webroot --webroot-path /var/www/html --force-renewal --non-interactive --agree-tos --email $EMAIL --cert-name $CERT_NAME --domains $DOMAINS" >> mycron && crontab -l -u root | cat - mycron | crontab -u root -

COPY lets_entrypoint.sh /home/lets_entrypoint.sh

ENTRYPOINT ["/bin/bash", "/home/lets_entrypoint.sh"]

CMD ["already_installed"]

