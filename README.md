# About

My old website (from 2012). The code is a mess, but I still keeo it because I don't have time to make a new one.

# Build

```
sudo docker build -t lucaszanella_com .
```

# Run
```
sudo docker run -p 80:80 --rm --name lucaszanella_com_1 -v $PWD/public_html:/var/www/html --restart unless-stopped lucaszanella_com
```
