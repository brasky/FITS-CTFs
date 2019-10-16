# Ansible

## Overview

Ansible is the engine that makes the entire CTF run smoothly. Ansible is a configuration management tool, not a service that is always running. That being said, the server where ansible is run is [orchestrator](orchestrator.md), although this article and the [rundeck](rundeck.md) article are the main components of orchestrator. They are such big topics I've separated them to two documents.

Ansible uses SSH to connect to VMs in the [host](../../hosts) file using the private key of the user it is run as. Then, depending on the roles assigned to each host, it runs the tasks in that role.

## Initial Setup

To initially set up ansible from scratch, you would need to: 

- Create all the VMs manually in VMware that you want to manage (i.e. orchestrator, prod, dev, etc.)
- Ensure the static IP assignments in the sonicwall are updated with the new mac addresses of the VMs
- create the mgmtadmin user on orchestrator
- create an ssh key - `ssh-keygen`
- run `ssh-copy-id [user]@[server]` for each server you want to manage with ansible.

Now Ansible will be able to run commands on each server.

