/*
Solucionar el error:
Access forbidden!

Paso 1: Ir a:
lampp/etc/extra/httpd-xampp.conf

Paso 2:

Donde pone:

<Directory "/opt/lampp/phpmyadmin">
    AllowOverride AuthConfig Limit
    Require local
    ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
</Directory>

Poner:

<Directory "/opt/lampp/phpmyadmin">
    AllowOverride AuthConfig Limit
    Require all granted
    ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
</Directory>

Paso 3: Reiniciar los servicios de Xampp
*/


CREATE DATABASE IF NOT EXISTS bd1 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE bd1;

DROP TABLE IF EXISTS articulos;
DROP TABLE IF EXISTS fotografias;

CREATE TABLE IF NOT EXISTS articulos
(
    ide_art INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_art VARCHAR (100) CHARACTER SET utf8 DEFAULT NULL,
    des_art VARCHAR (200) CHARACTER SET utf8 DEFAULT NULL,
    gen_art VARCHAR (20) CHARACTER SET utf8 DEFAULT NULL,
    pvp_art DECIMAL(5,2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS fotografias
(
    ide_for INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rut_fot VARCHAR (200) CHARACTER SET utf8 DEFAULT NULL,
    ide_art INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO articulos (nom_art, des_art, gen_art, pvp_art) VALUES
('camisa estamada', 'camisa de algodon slim fit', 'h', 39.95),
('camisa a rayas', 'camisa lino', 'h', 42.95),
('abrigo de paño', 'tres cuartos austriaco', 'h', 139.95);
INSERT INTO fotografias (rut_fot, ide_art) VALUES
('Assets/img/prendas/1-1.jpg', 1),
('Assets/img/prendas/1-2.jpg', 1),
('Assets/img/prendas/1-3.jpg', 1),
('Assets/img/prendas/2-1.jpg', 2),
('Assets/img/prendas/2-2.jpg', 2),
('Assets/img/prendas/2-3.jpg', 2),
('Assets/img/prendas/3-1.jpg', 3),
('Assets/img/prendas/3-2.jpg', 3),
('Assets/img/prendas/3-3.jpg', 3);
