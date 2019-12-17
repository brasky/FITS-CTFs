# VMWare

## Overview

IP address: 192.168.1.16

- VMWare ESXi-6.7.0-20190402001-standard is installed
- No vCenter
- 2 Network cards active
    - CorpNet (VLAN 1) - servers appended with "MGMT" are generally corp, sometimes lab.
    - CTF VMs (VLAN 10 - lab) - servers appended with "CTF" are ALWAYS on this network card. Anything that is intended to be attacked in any way should be on this card.
