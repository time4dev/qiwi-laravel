# Wrapper for QIWI payment SDK for Laravel 5
This is the wrapper for Universal payments API PHP SDK

## Setup
Step 1. Installing with composer:
```bash
$ composer require casparone/qiwi-laravel
```
Step 2. Add the Service Provider
```php
Telegram\Bot\Laravel\TelegramServiceProvider::class
```
Step 3. Step 2: Add Facade (Optional)
```php
'Qiwi'  => Qiwi\Facades\Qiwi::class
```
Step 4: Publish Configuration File
```php
php artisan vendor:publish --provider="Telegram\Bot\Laravel\TelegramServiceProvider"
```