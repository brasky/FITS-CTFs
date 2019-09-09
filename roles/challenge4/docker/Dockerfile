FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server sudo
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/sysadmin sysadmin
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash sysadmin

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

COPY --chown=sysadmin:sysadmin super_secret_program /home/sysadmin/super_secret_program
RUN chmod 644 /home/sysadmin/super_secret_program