# Beginner Web 12 - Creds in file (password cracking)

## Overview 

Challenge is to browse to a website and find creds (hash) to login from a file that can be found through a default wordlist (common.txt from seclists web discovery) and crack the password. I used SecLists/Passwords/Common-Credentials/10-million-password-list-top-100000.txt to get the password and tested cracking using hashcat mode 7400 (sha256 unix unsalted)

Apache is running on port 8012 in an ubuntu 18.04 docker container.

## Creds

jackadmin:jackpot

## Flag

flag{4tl3ast1tw4sntpl41nt3xtr1ght?!}