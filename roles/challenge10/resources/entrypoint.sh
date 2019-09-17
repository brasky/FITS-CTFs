echo "Listen 127.0.0.1:1337" >> /etc/httpd/conf/httpd.conf
echo "DocumentRoot '/var/www/html'" >> /etc/httpd/conf/httpd.conf
service httpd restart
/usr/sbin/sshd -D