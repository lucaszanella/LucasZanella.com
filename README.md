# About

My old website (from 2012). The code is a mess, I was young, but I still keep it because I don't have time to make a new one.


#Installation

For first run, if there are no webservers running (ports 80 and 443 are free), do 

```
sudo docker run --rm -e EMAIL='me@lucaszanella.com' -e CERT_NAME='lucaszanella.com' -e DOMAINS='lucaszanella.com' -p 80:80 -p 443:443 -v  /letsencrypt:/etc/letsencrypt/live lets_encrypt standalone
```


# Build without website running (use for first build, or just use the 'All builds' command below (DEPRECATED)

```
sudo docker build --build-arg CREATE_NEW_CERT=yes -t lucaszanella_com .
```

# Run
```
sudo docker run -d -p 80:80 -p 443:443 --name lucaszanella_com_1 -v $PWD/public_html:/var/www/html --restart unless-stopped lucaszanella_com
```

# All Builds: Stop apache, build everything with certbot attached to https, and rerun the website (DEPRECATED)

```
sudo docker stop lucaszanella_com_https_1 || true && sudo docker rm lucaszanella_com_https_1 ||true && sudo docker build -t lucaszanella_com_https --network host --build-arg CREATE_NEW_CERT=yes . || true && sudo docker run -d -p 80:80 -p 443:443 --name lucaszanella_com_https_1 -v $PWD/public_html:/var/www/html --restart unless-stopped lucaszanella_com_https
```
