# About

My old website (from 2012). The code is a mess, I was young, but I still keep it because I don't have time to make a new one.

# Installation (https certs generation before apache starts to run)

For first run, if there are no webservers running (ports 80 and 443 are free), do 

```
sudo docker-compose -f installer-compose.yml up
```

or (UNTESTED)

```
sudo docker build -f lets_encrypt.Dockerfile -t lets_encrypt .

sudo docker run --rm -e EMAIL='me@lucaszanella.com' -e CERT_NAME='lucaszanella.com' -e DOMAINS='lucaszanella.com' -p 80:80 -p 443:443 -v  /letsencrypt:/etc/letsencrypt/live lets_encrypt standalone
```


# Run 

```
sudo docker-compose up
```
