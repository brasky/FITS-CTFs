service ssh start
PORT=$((1000 + RANDOM % 32000))
su - webserver -c "python -m SimpleHTTPAuthServer $PORT --dir /home/webserver/"
PORT=$((1000 + RANDOM % 32000))