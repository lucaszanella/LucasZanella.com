FROM ubuntu:latest

RUN apt-get update && apt-get install -y software-properties-common && add-apt-repository ppa:certbot/certbot && apt-get update && apt-get install -y certbot

RUN echo "0 0 * * 1,4 certbot renew" >> mycron && crontab -l -u root | cat - mycron | crontab -u root -

WORKDIR /home

COPY lets_entrypoint.sh /home/lets_entrypoint.sh

#ENTRYPOINT /bin/bash lets_entrypoint.sh

ENTRYPOINT ["/bin/bash", "/home/lets_entrypoint.sh"]

CMD ["already_installed"]

#ENTRYPOINT echo "if [ ! -f /etc/letsencrypt/live/lucaszanella.com/cert.pem ] ; then certbot certonly --webroot --webroot-path /var/www/html --non-interactive --agree-tos --email me@lucaszanella.com --cert-name lucaszanella.com --domains lucaszanella.com; fi" | /bin/bash
