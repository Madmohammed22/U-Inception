# Use penultimate stable Alpine-based RabbitMQ image
FROM rabbitmq:3.12.11-management-alpine

# Maintains Alpine base + RabbitMQ + Web UI

# Copy startup script (optional if you want to create default user manually)
COPY ./tools/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Environment variables (from .env)
ENV RABBITMQ_DEFAULT_USER=${RABBITMQ_DEFAULT_USER}
ENV RABBITMQ_DEFAULT_PASS=${RABBITMQ_DEFAULT_PASS}

ENTRYPOINT ["/usr/local/bin/start.sh"]
