# Hướng dẫn chạy dự án Laravel

Hướng dẫn này cung cấp thông tin về cách chạy dự án Laravel sau khi đã clone nó về máy tính của bạn.

## Bước 1: Tạo cơ sở dữ liệu

Trước tiên, bạn cần tạo một cơ sở dữ liệu trong phpMyAdmin. Bạn có thể đặt tên cơ sở dữ liệu là "ems" hoặc chọn một tên khác. Hãy nhớ tên cơ sở dữ liệu này vì chúng ta sẽ sử dụng nó sau này.

## Bước 2: Cài đặt các thư viện cần thiết

1. Mở terminal và di chuyển đến thư mục chứa dự án Laravel đã được clone về.
2. Chạy lệnh sau để cài đặt các thư viện cần thiết:

   ```shell
   composer install
Lệnh trên sẽ tải xuống và cài đặt tất cả các gói và thư viện mà dự án Laravel yêu cầu.

## Bước 3: Cấu hình biến môi trường

1. Đổi tên tệp .env.example thành .env. Tệp .env chứa các biến môi trường cần thiết để cấu hình dự án Laravel.

2. Mở tệp .env bằng trình chỉnh sửa văn bản và đặt các thông tin sau:

   * DB_DATABASE: Tên cơ sở dữ liệu bạn đã tạo ở Bước 1 (ví dụ: ems).
   * DB_USERNAME: Tên người dùng MySQL của bạn.
   * DB_PASSWORD: Mật khẩu người dùng MySQL của bạn.
   * Đảm bảo rằng các thông tin cấu hình này chính xác để dự án có thể kết nối đến cơ sở dữ liệu.
## Bước 4:  Chạy dự án Laravel
1. Trong terminal, di chuyển đến thư mục dự án Laravel (nếu chưa di chuyển).

2. Chạy lệnh sau để tạo khóa ứng dụng:

    ```shell
    php artisan key:generate
    ```
    Lệnh trên sẽ tạo ra một khóa ứng dụng ngẫu nhiên và lưu nó trong tệp .env.
3. Chạy lệnh sau để chạy các migration và seed:
    ```shell
   php artisan migrate --seed
   ```
    Lệnh trên sẽ thực thi các migration để tạo bảng trong cơ sở dữ liệu và thêm dữ liệu mẫu (nếu có)
4. Cuối cùng chạy lệnh sau để khởi chạy máy chủ phát triển Laravel:
    ```shell
    php artisan serve
Lệnh trên sẽ khởi chạy máy chủ phát triển Laravel trên localhost với cổng mặc định là 8000. Bạn có thể truy cập dự án Laravel bằng cách mở trình duyệt và nhập URL sau: http://localhost:8000.
