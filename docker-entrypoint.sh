#!/bin/bash

# Wait for the database to be ready
echo "Waiting for database connection..."
until nc -z -v -w30 $DB_HOST $DB_PORT; do
   echo "Waiting for database..."
   sleep 1
done
echo "Database is ready!"

# Run database migrations
php artisan migrate --force

# Run database seeders
php artisan db:seed --class=AdminTableSeeder --force

# Start the main process (Apache)
exec "$@"
