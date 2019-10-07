FROM ubuntu:18.04
ENV TZ=America/Los_Angeles
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update -q -y && apt-get install -q -y --no-install-recommends apache2 php openssh-server
RUN mkdir /var/run/sshd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk123!' | chpasswd
RUN usermod -s /bin/bash jack

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd
ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 8004
RUN useradd -m -d /home/webserver webserver
COPY --chown=webserver:webserver entrypoint.sh /root/entrypoint.sh
COPY --chown=webserver:webserver 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY --chown=webserver:webserver ports.conf /etc/apache2/ports.conf
ADD --chown=webserver:webserver my_website /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 700 /var/www/html
RUN rm /var/www/html/index.html
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
