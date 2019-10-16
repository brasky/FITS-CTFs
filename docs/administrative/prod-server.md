# Prod Server

192.168.10.11

## Overview

The dev server is an almost mirrored copy of [dev](dev-server.md) with the exception that it is running [ctfbot](ctfbot.md).

There are specific [rundeck](rundeck.md) jobs for prod that pull from the master branch on [github](github.md).

To deploy this from scratch, create an Ubuntu VM in VMWare, update the mac address in the static IP on the sonicwall, and follow the instructions in [ansible.md](ansible.md)