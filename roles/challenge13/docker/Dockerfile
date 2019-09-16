FROM ubuntu:18.04

RUN apt-get update && apt-get install -y vsftpd
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd

EXPOSE 21
COPY --chown=jack:jack entrypoint.sh /root/entrypoint.sh
COPY --chown=root:root vsftpd.conf /etc/vsftpd.conf
RUN echo "flag{}" >> /home/jack/flag
RUN mkdir /tmp/empty
RUN chmod 555 /tmp/empty
RUN mkdir /var/ftp
RUN echo "username:password" >> /var/ftp/.hidden_creds
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
