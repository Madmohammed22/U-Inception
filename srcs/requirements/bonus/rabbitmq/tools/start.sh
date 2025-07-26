#!/bin/sh

echo "[INFO] Starting RabbitMQ setup..."

# Start RabbitMQ temporarily to create user
rabbitmq-server -detached
sleep 5

rabbitmqctl add_user "$RABBITMQ_DEFAULT_USER" "$RABBITMQ_DEFAULT_PASS" 2>/dev/null || true
rabbitmqctl set_user_tags "$RABBITMQ_DEFAULT_USER" administrator
rabbitmqctl set_permissions -p / "$RABBITMQ_DEFAULT_USER" ".*" ".*" ".*"

rabbitmqctl stop
sleep 2

echo "[INFO] Launching RabbitMQ server..."
exec rabbitmq-server
