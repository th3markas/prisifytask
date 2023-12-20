
# Tech Test 

Test task for Prisify, Simple products table with some filters created using Laravel+Livewire



## Installation

Clone the repository
Set the DB_ environment variables in .env file
Create a database with the name specified in DB_DATABASE

```bash
  composer install
  php artisan migrate
  php artisan serve
  php artisan db:seed --class=ManufacturerSeeder
  php artisan db:seed --class=ProductSeeder 
  npm run dev
```

Register a simple user, the task is completed under /products route, or you can press the menu button "Products"