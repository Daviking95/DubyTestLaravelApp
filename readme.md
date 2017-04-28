#Readme

##Setup
1. Create this table in your mysql db "dubytezza"
2. Run this cmd "composer install" to install dependencies
3. Run this to generate new app key "php artisan key:generate"
4. Set your db specific configs in the configs.database file and the .env file
5. Run the migration code with this cmd "php artisan migrate"
6. Run the server with this cmd "php artisan serve"
7. Open your browser and go the localhost:8000/interns 