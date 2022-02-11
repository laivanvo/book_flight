#!/bin/bash
​
# Exit on fail
set -e
​
# Composer install
composer install --no-autoloader --no-scripts --no-interaction --dev
​
composer dump-autoload --optimize --no-interaction
​
# Waiting for dependent containers
/wait-for-it.sh db:3306 -t 300
/wait-for-it.sh redis:6379 -t 300
/wait-for-it.sh elasticsearch:9200 -t 300
​
# Migrate
php artisan migrate
​
# Seeding
php artisan db:seed
​
# Start services
php artisan serve --host=0.0.0.0
​
# Finally call command issued to the docker service
exec "$@"
