# Beginner Web 7 - LFI

## Overview 

Challenge is to browse to a website and use LFI to read the flag. There is a "file viewer" site set up that claims to only be able to read files from the local dir. In reality, it's only validating input in the html form, not in the php, so someone can enter test.txt, intercept the request, and change it to /home/jack/flag.txt or they can just craft a post request with that field.

Apache is running on port 8007 in an ubuntu 18.04 docker container.

## Creds

None

## Flag

flag{}