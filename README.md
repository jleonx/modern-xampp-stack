# Modern XAMPP Docker Stack

A modern, dockerized XAMPP stack with SSL support for local development.

## Features

- PHP 8.2 with Apache
- MySQL 8.0
- phpMyAdmin
- SSL support out of the box
- Volume mapping for easy development
- Network isolation with Docker

## Prerequisites

- Docker
- Docker Compose

## Quick Start

1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/modern-xampp-stack.git
   cd modern-xampp-stack
   ```

2. Generate SSL certificates (or use the provided ones for development only):
   ```bash
   mkdir -p ssl
   openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout ssl/key.pem -out ssl/cert.pem
   ```

3. Start the containers:
   ```bash
   docker-compose up -d
   ```

4. Access your applications:
   - Website: https://localhost
   - phpMyAdmin: http://localhost:8080

## Project Structure

```
modern-xampp-stack/
├── apache-config/       # Apache configuration files
├── mysql-data/          # MySQL data (created after first run)
├── ssl/                 # SSL certificates
├── www/                 # Web root directory
├── docker-compose.yml   # Docker Compose configuration
└── README.md            # This file
```

## Configuration

### PHP Configuration

To customize PHP settings, create a custom php.ini file and mount it in the docker-compose.yml file.

### Apache Configuration

Apache configuration files are located in the `apache-config` directory. The default configuration includes SSL setup.

### MySQL Configuration

MySQL environment variables can be modified in the docker-compose.yml file.

## Development Workflow

1. Place your PHP files in the `www` directory
2. Access your website at https://localhost
3. Use phpMyAdmin at http://localhost:8080 to manage your databases

## Database Connection

Use these parameters in your application to connect to the MySQL database:

- Host: `mysql`
- Port: `3306`
- Database: `test_db`
- Username: `test_user`
- Password: `test_pass`
- Root Password: `root`

## License

MIT

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.