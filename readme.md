Cách chạy project:
Project chạy bằng Laravel nên các bạn phải cài đặt sẵn Laravel và các phần mềm cần thiết trước
1. Tạo database tên blog trên cơ sở dữ liệu phpmyadmin
2. chạy command:
php artisan migrate
3. chạy command:
php artisan db:seed
4.php artisan db:seed --class=UserSeeder
5. Chạy:
php artisan serve
6. Chương trình sẽ được chạy tại cổng: localhost:8000
