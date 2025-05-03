#!/bin/bash

# Create SSL directory if it doesn't exist
mkdir -p ssl

# Generate SSL certificate
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout ssl/key.pem -out ssl/cert.pem

echo "SSL certificates generated successfully!"
echo "You can now run 'docker-compose up -d' to start the stack."