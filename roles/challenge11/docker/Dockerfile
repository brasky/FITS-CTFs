FROM ubuntu:18.04

RUN apt-get update && apt-get install -y nc
RUN useradd -m -d /home/jack jack
RUN echo 'jack:theBeanStalk' | chpasswd
RUN usermod -s /bin/bash jack

EXPOSE 22
COPY --chown=jack:jack entrypoint.sh /root/entrypoint.sh
RUN echo "flag{n3tc4t_is_your_B3st_Fr13nd}" >> /home/jack/flag.txt
ENTRYPOINT ["bash", "-c", "/root/entrypoint.sh"]
