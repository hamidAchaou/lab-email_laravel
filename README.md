# Send Email

## Create Project 
```bash
composer create-project laravel/laravel:^10.0 lab-email_laravel
```

## manage envariement 

```bash
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=hamid@gmail.com
    MAIL_PASSWORD="your password"
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="hamid@gmail.com"
    MAIL_FROM_NAME="${APP_NAME}"
```

## make mail 
```bash
    php artisan make:mail HelloMail
```

## 