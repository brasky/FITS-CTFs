FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN touch /home/jack/catme.txt
RUN echo "flag{B0N3_bRe4D_1s_GRoS5}" >> /home/jack/catme.txt
RUN chown jack:jack /home/jack/catme.txt
RUN chmod 644 /home/jack/catme.txt

RUN mkdir /home/jack/.ssh
RUN touch /home/jack/.ssh/authorized_keys
RUN chmod 700 /home/jack/.ssh
RUN chmod 600 /home/jack/.ssh/authorized_keys

RUN echo -n "AAAAB3NzaC1yc2EAAAABJQAAAQEAhWb12JtItmcOBRE1EpTyy7axci8+RKrkWFnwCzL3nXTTRmRtSexseJhN3SbBcu2GrFFfuBJsW4ektXl9zCJ/ja8qxcBhOUaS0NOHItT5jA8EhRZ0zd8yEcSYCOem2OsejdMe4hZT9DQsYDQKm6Y1aFCiM3vBX9WI26y1aIShMmEZlHJGl2sA8f/r4Orr2gJlXbB4ZnRB0M/vWPcPSH4hZ1gsQgJX4Z6PhajHrcLrdY0Cwz/c1W6svt1BaDCekZOYMmsqq6n4bpktejzJcMbJe72Oxt+GhI4uL+IsXGzSHB5Vx4EC3MJVID1m75uUV19X7/qRnIPoH14KhDZT4U02cw==" > /home/jack/.ssh/authorized_keys