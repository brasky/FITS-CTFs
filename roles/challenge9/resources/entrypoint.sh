service ssh start
setcap CAP_NET_BIND_SERVICE=+eip /usr/bin/python2.7
su - webserver -c "python -m SimpleHTTPAuthServer 80 --dir /home/webserver/"
tail -f /dev/null