# WordPress Dockerfile – fixed, ready to build
FROM debian:bookworm-slim

# 1. Install required packages in one RUN (no cache left behind)
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        php-fpm \
        php-mysql \
        curl && \
    rm -rf /var/lib/apt/lists/*

# 2. Copy the helper files used by the original setup
COPY ./tools/script.sh       /script.sh
COPY ./tools/wp-config.php   /wp-config.php

# 3. Make the entry-point executable
RUN chmod +x /script.sh

# 4. Start the container
CMD ["/script.sh"]