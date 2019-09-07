FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server sudo
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/giant giant
RUN echo 'giant:b0nes2br3ad' | chpasswd
RUN usermod -s /bin/bash giant

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

RUN touch /home/giant/catme.txt
RUN echo "flag{Gogmagog}" >> /home/giant/catme.txt
RUN chown root:root /home/giant/catme.txt
RUN chmod 400 /home/giant/catme.txt
RUN echo 'giant ALL=NOPASSWD: /bin/cat, /usr/bin/whoami' >> /etc/sudoers