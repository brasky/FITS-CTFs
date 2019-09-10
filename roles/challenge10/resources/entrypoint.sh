service ssh start
setcap CAP_NET_BIND_SERVICE=+eip /usr/bin/python2.7
PORT=$((1000 + RANDOM % 32000))
su - webserver -c "python -m SimpleHTTPAuthServer $PORT --dir /home/webserver/"
PORT=$((1000 + RANDOM % 32000))