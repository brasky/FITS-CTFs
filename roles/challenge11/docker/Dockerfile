FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server python python-pip curl net-tools
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
COPY --chown=jack:jack entrypoint.sh /root/entrypoint.sh
RUN echo "flag{n3tc4t_is_your_B3st_Fr13nd}" >> /home/jack/flag.txt
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
