# AVA WIZARD AUTH

This is Form app is to make faster the validation of a authentication. It has
been made by Laravel framework struct.

## Pre-requirements

To start the App:

    $ Docker *At least Engine: 18.06.1-ce

Database setup:

## Usage

To start the app:

    $ docker-composer pull
    $ docker-composer up -d
    $ composer install
    
Use commands Inside de Docker:

    $ docker ps (To see the container)
    $ docker exec -it [container ID] bash
    $ composer install
    
## Database

By Migration setup:

    $ php artisan migrate

By DB setup directly:

    * Host: 127.0.0.1
    * User: root
    * Senha: ntf2XDxdLm4qUMBW
    * Post: 33086
    
Tables:

    CREATE TABLE `passo1` (
    `complete_name` VARCHAR(255) NOT NULL,
    `birth_date` VARCHAR(255) NOT NULL
    ) COLLATE='utf8_general_ci' ENGINE=InnoDB;
    
    CREATE TABLE `passo2` (
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(50) NOT NULL,
    `country` VARCHAR(50) NOT NULL
    ) COLLATE='utf8_general_ci' ENGINE=InnoDB;
        
    CREATE TABLE `passo3` (
    `contact_phone` VARCHAR(255) NOT NULL,
    `cell_phone` VARCHAR(255) NOT NULL
    ) COLLATE='utf8_general_ci' ENGINE=InnoDB;

![alt text](![alt text](https://github.com/lucas0000miranda/ava/blob/master/prints/Captura%20de%20Tela%202019-11-04%20%C3%A0s%2012.33.03.png)
)
