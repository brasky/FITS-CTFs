FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server python python-pip libcap2-bin curl netstat
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
RUN pip install SimpleHTTPAuthServer
RUN useradd -m -d /home/webserver webserver
COPY --chown=webserver:webserver entrypoint.sh /root/entrypoint.sh
RUN echo "flag{}" >> /home/webserver/index.html
#allow python to bind on 80 without being root
RUN setcap CAP_NET_BIND_SERVICE=+eip /usr/bin/python2.7
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]

