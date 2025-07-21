
FROM debian:buster

# Point APT to the archived mirrors
RUN sed -i 's|deb.debian.org/debian|archive.debian.org/debian|g' \
        /etc/apt/sources.list && \
    sed -i 's|security.debian.org|archive.debian.org/debian-security|g' \
        /etc/apt/sources.list && \
    apt-get update -y && \
    apt-get install -y nginx openssl

# COPY ./conf/default /etc/nginx/sites-available/
COPY ./tools/script.sh /
CMD ["/script.sh"]