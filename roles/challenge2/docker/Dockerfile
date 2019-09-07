FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server sudo
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:m4gicb3ans' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN touch /home/jack/catme.txt
RUN echo "flag{}" >> /home/jack/catme.txt
RUN chown root:root /home/jack/catme.txt
RUN chmod 400 /home/jack/catme.txt
RUN echo 'jack ALL=NOPASSWD: /bin/cat' >> /etc/sudoers