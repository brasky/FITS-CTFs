# Github

https://github.com/brasky/FITS-CTFs

## Branches

Two branches required for proper operation:

- master
    - gets deployed to [prod](prod-server.md)

- dev
    - gets deployed to [dev](dev-server.md)

## Webhook

There is a webhook configured to send commits to https://smee.io/di8K3xht47O8CuFE. The [Jenkins](jenkins.md) server is running smeeclient which is subscribed to the feed at that url and forwards it onto localhost:8080/git-webhook/. There is a unitfile on jenkins in /etc/systemd/system/smeefeed.service:

```
[Unit]
Description=smeeclient

[Service]
Type=simple
ExecStart=/bin/bash /home/jenkins/smeestart.sh

[Install]
WantedBy=multi-user.target
```

smeestart.sh:
```
smee --url https://smee.io/di8K3xht47O8CuFE --path /github-webhook/ --port 8080
```

This webhook kicks off jobs in [Jenkins](jenkins.md), see that article for more detail.

## Deploy Keys

The following keys have been added to the repository to allow servers access:

- orchestrator
    - read only
    - Fingerprint: d9:09:2a:39:fe:e5:30:9a:d8:fb:8c:7d:20:26:e6:bc
- Jenkins
    - read only
    - Fingerprint: b4:c3:a3:fa:5c:8c:1d:e0:2b:ac:5c:7a:8a:fc:40:e8

The keys themselves are stored in the respective user accounts' .ssh folder and have _github appended to the filename.