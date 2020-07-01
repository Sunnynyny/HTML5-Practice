FROM alpine:3.5

ENV LANG="en_US.UTF-8" \
    LC_ALL="en_US.UTF-8" \
    LANGUAGE="en_US.UTF-8" \
    TERM="xterm"

COPY /conf/run.sh /usr/local/bin/run.sh

# Bundle app source
COPY . .

RUN echo "http://dl-4.alpinelinux.org/alpine/v3.5/main" >> /etc/apk/repositories && \
    apk --update add \
        curl \
        git \
        nginx \
        php7 \
        php7-curl \
        php7-ctype \
        php7-dom \
        php7-fpm \
        php7-gd \
        php7-iconv \
        php7-intl \
        php7-json \
        php7-mbstring \
        php7-mcrypt \
        php7-openssl \
        php7-pdo \
     