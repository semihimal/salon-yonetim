# Salon Yönetim Sistemi

Bu projeyi PHP ve Laravel öğrenirken, öğrendiğim konuları gerçek bir proje üzerinde uygulamak için geliştirdim.

Amacım sadece örnek kod yazmak yerine; müşteri, hizmet ve randevu işlemlerinin olduğu küçük ama çalışan bir yönetim sistemi oluşturmaktı.

Projeyi geliştirirken Laravel'in temel yapılarını, MySQL bağlantısını, CRUD işlemlerini, model ilişkilerini ve API tarafını uygulamalı olarak çalıştım.

## Projede Neler Var?

- Ana panel
- Müşteri yönetimi
- Hizmet yönetimi
- Randevu yönetimi
- CRUD işlemleri
- Form doğrulama
- MySQL veritabanı
- Eloquent ORM
- Model ilişkileri
- Foreign key kullanımı
- Route Model Binding
- Blade
- REST API
- Postman ile API testleri
- Git ve GitHub
- Yönetici giriş sistemi
- Session tabanlı web authentication
- Auth middleware ile korunan yönetim paneli
- Laravel Sanctum ile API token authentication

## Kullandığım Teknolojiler

- PHP
- Laravel 13
- MySQL
- Blade
- HTML / CSS
- Composer
- Git
- GitHub
- Postman

## Veritabanı Yapısı

Projede temel olarak üç tablo bulunuyor.

### Customers

Müşteri bilgilerini tutuyor.

- id
- name
- phone
- email
- notes
- timestamps

### Services

Sunulan hizmetleri tutuyor.

- id
- name
- price
- duration_minutes
- description
- is_active
- timestamps

### Appointments

Müşteri ve hizmet arasında oluşturulan randevuları tutuyor.

- id
- customer_id
- service_id
- appointment_at
- status
- notes
- timestamps

## Model İlişkileri

Projede kullandığım temel ilişkiler:

```text
Customer hasMany Appointment

Service hasMany Appointment

Appointment belongsTo Customer

Appointment belongsTo Service

Bu sayede bir randevunun hangi müşteriye ve hangi hizmete ait olduğunu veritabanı üzerinden ilişkilendirmiş oldum.