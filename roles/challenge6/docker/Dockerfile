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

RUN base64 /dev/urandom | head -c 100000 > /home/jack/haystack.txt
RUN echo "flag{its_easy_to_find_the_needle_on_a_computer}" >> /home/jack/haystack.txt
RUN base64 /dev/urandom | head -c 100000 >> /home/jack/haystack.txt
RUN chown jack:jack /home/jack/haystack.txt
RUN chmod 444 /home/jack/haystack.txt