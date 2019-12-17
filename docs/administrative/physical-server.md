# Physical Server

## Overview 

- Purchased from Ebay account used-servers.com
- Dell Poweredge R720 8 Bay 16 Core 2.6GHZ Server 128GB RAM | 8x 900GB com | H710 - service tag 3CQR842
- Purchased rails with it but we have a 2-post rack so they are on the floor behind the server room door for now.
- idrac is configured on 192.168.1.19.


## Issues

- Early september 2019 (check the idrac logs) DIMM A2 hit max error corrections and was reseated.
- Early October 2019 DIMM B7 hit max error corrections and upon reseating the server would not boot because of an issue with DIMM B4. B4 and B7 were swapped and the server booted properly.
- oct 15 sent an email to the vendor to get dimm b4 replaced, it's reporting max errors hit.
