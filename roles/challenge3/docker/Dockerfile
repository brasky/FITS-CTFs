FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server python python-pip
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:andJill' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
RUN service ssh restart && bash
RUN pip install SimpleHTTPAuthServer
CMD ["python", "-m", "SimpleHTTPAuthServer", "1337", "jack:flag{n3ed5_PR0ce5s_1mpROv3mEn7}", "--dir", "/home/jack"]