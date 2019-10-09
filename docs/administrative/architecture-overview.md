# Architecture Overview

This document is supposed to help give a general overview of the CTF architecture in case things break. More detail on each subject will be broken out into new pages.


## Overview

The architecture is split into 2 categories:

### CTF Infrastructure

CTF Infrastructure is the absolute bare minimum for the CTF to function. These items are considered essential to the CTF functionality:

- [Github](github.md)
- [Ansible](ansible.md)
- [Jenkins](jenkins.md) (VM - jenkins)
- [Rundeck](rundeck.md) (VM - orchestrator)
- [CTFd](ctfd.md) (VM - controller)
- [prod server](prod-server.md) (VM - challenges)
- [VMWare](vmware.md) and the VMs listed above corresponding to each tool
- [Networking](networking.md) devices (WAPs, Switches, Sonciwall)
- [Physical server](physical-server.md)


### Supporting Services

Supporting services are things that could break and not the flow of new challenges or impede access to existing challenges. These items include, but are not limited to:

- [dev server](dev-server.md) (VM - DEV-Challenges)
- [ctfbot](ctfbot.md) (https://github.com/brasky/ctfbot)
- [Imaging Server](utility.md) (VM - Utility)
- [ELK](elk.md) (VM - ELK)
- [Domain](fitsctf-domain.md) fitsctf.com and associated certificate (owned by Elliot)
