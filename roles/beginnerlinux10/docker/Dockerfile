FROM ubuntu:18.04

RUN apt-get update && apt-get install -y openssh-server apache2 curl net-tools
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
RUN useradd -m -d /home/webserver webserver
COPY --chown=webserver:webserver entrypoint.sh /root/entrypoint.sh
COPY --chown=webserver:webserver 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY --chown=webserver:webserver ports.conf /etc/apache2/ports.conf
RUN echo "flag{c4nt_h1d3_fr0m_n3t5t4t}" >> /var/www/html/index.html
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 700 /var/www/html
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
