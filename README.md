# Build

```
sudo docker build -t lucaszanella_com .
```

# Run
```
sudo docker run -p 80:80 --rm --name lucaszanella_com_1 -v $PWD/public_html:/var/www/html --restart unless-stopped lucaszanella_com
```
