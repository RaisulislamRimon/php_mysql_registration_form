# php_mysql_registration_form


## mysql table create code:

    CREATE TABLE users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        phone VARCHAR(15) NOT NULL,
        password VARCHAR(255) NOT NULL
    );
