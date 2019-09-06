FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd

ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

RUN echo "flag{n0w_Th4t_wa5nt_so_h4rd!}" >> /home/jack/catme.txt
RUN chown jack:jack /home/jack/catme.txt
RUN chmod 655 /home/jack/catme.txt
EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]