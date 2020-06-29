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