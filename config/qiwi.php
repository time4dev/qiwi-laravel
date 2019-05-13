<?php
return [
    /*
    |--------------------------------------------------------------------------
    | [REQUIRED]
    |--------------------------------------------------------------------------
    |
    | Your Qiwi's Access Token.
    | Example: kokoOKPzaW9uIjoicmVzdF92MyIsImRhdGEiOnsibWVyY2hhbnRfaWQiOjUyNjgxMiwiYXBpX3VzZXJfaWQiOjcxNjI2MTk3LCJzZWNyZXQiOiJmZjBiZmJiM2UxYzc0MjY3YjIyZDIzOGYzMDBkNDhlYjhiNTk5NmIbhchhbbHBHIBDBI**********************
    |
    | Refer for more details:
    | https://developer.qiwi.com/ru/bill-payments/#auth
    |
    */
    'secret_key' => env('SECRET_KEY', 'change_default_secret_key'),
];
