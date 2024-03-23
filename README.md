Follow below setps for setup & run project :

1. Clone the project.
2. Set .env & in that file set Database name ('exercise').
3. After, run below commands :
    ->composer update
    ->php artisan migrate
4. For create default admin user run below command :
    ->php artisan db:seed --class=AdminUserSeeder
5. Now, for run project run command :
    ->php artisan serve

Login Credentials : 

Email    : admin@admin.com
Password : password
