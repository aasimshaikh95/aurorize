#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# Wait for the database to be ready
echo "Waiting for database connection..."
until nc -z -v -w30 $DB_HOST $DB_PORT; do
   echo "Waiting for database..."
   sleep 1
done
echo "Database is ready!"

# Run the deploy:app command
php artisan deploy:app --force

# Execute the main process specified in the Dockerfile's CMD
exec "$@"
