# CTFd

## Overview

CTFd is installed in ctfadmin's home dir and run with gunicorn on localhost:8000 (no ssl). Nginx is running on 80 and 443 and configured to redirect 80 to 443. It handles the SSL certificate and domain.

## CTFd Service
CTFd should be installed in ctfadmin's home directory. 
```
[Unit]
Description=CTFd Web Server

[Service]
Type=simple
User=ctfadmin
ExecStart=/home/ctfadmin/.local/bin/gunicorn --bind 127.0.0.1:8000 --bind unix:/home/ctfadmin/ctf.sock  -w 40 --timeout 90 "CTFd:create_app()"
WorkingDirectory=/home/ctfadmin/CTFd/

[Install]
WantedBy=multi-user.target
```

For some reason, there's an extreme performance issue when running gunicorn with only 4 workers as the ctfd deployment guide recommends. Luckily we have enough juice to run it with 40 workers, but eventually we should figure this out. For now I think it's worth the security benefit to have gunicorn and we aren't that tight on cpu/ram.

## Nginx

After installing nginx, edit the config at `/etc/nginx/sites-available/default`. The config current in use is in [nginx-config.md](nginx-config.md)

## Domain and Certificate

The domain fitsctf.com is owned by Elliot and the certificate is from LetsEncrypt. Since the site is public facing, you must use the dns challenge option which requires you to edit a txt record in the domain dns records (which only Elliot can do at this time).

The command to generate the txt record is `sudo certbot -d fitsctf.com --manual --preferred-challenges dns certonly` which upon completion will put your cert and private key in `/etc/letsencrypt/`

The certificate and private key are stored in `/home/ctfadmin/CTFd/` (fullchain.pem and privkey.pem)