# Salon Yönetim Sistemi

Bu proje, PHP ve Laravel öğrenme sürecimi gerçek bir uygulama geliştirerek ilerletmek amacıyla oluşturduğum bir salon yönetim sistemidir.

Projeyi geliştirirken Laravel'in temel yapılarını yalnızca teorik olarak öğrenmek yerine müşteri, hizmet ve randevu yönetimi gibi gerçek kullanım senaryoları üzerinde uygulamaya çalıştım.

## Projede Neler Var?

- Dashboard
- Müşteri yönetimi
- Hizmet yönetimi
- Randevu yönetimi
- CRUD işlemleri
- Form doğrulama (Validation)
- MySQL veritabanı bağlantısı
- Migration kullanımı
- Eloquent ORM
- Model ilişkileri
- Foreign Key kullanımı
- Route Model Binding
- Blade template yapısı
- Ortak Blade Layout
- REST API
- JSON response
- Postman ile API testleri
- Git ve GitHub ile versiyon kontrolü

## Kullanılan Teknolojiler

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

Projede temel olarak üç ana tablo bulunmaktadır:

### Customers

Müşteri bilgilerini tutar.

- id
- name
- phone
- email
- notes
- created_at
- updated_at

### Services

Salonda verilen hizmetleri tutar.

- id
- name
- price
- duration_minutes
- description
- is_active
- created_at
- updated_at

### Appointments

Randevu bilgilerini tutar.

- id
- customer_id
- service_id
- appointment_at
- status
- notes
- created_at
- updated_at

## Model İlişkileri

Bir müşterinin birden fazla randevusu olabilir:

```php
Customer -> hasMany(Appointment)