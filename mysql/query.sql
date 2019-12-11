show databases;
-- this is comment
create database huu_database character set utf8 collate utf8_unicode_ci;
CREATE TABLE users(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar VARCHAR(255),
    createt_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
);

/* -- text
char 0-255
varchar 0-255,
tinytext 0-255,
text 0 65.535,
blob == text,
mediumtext 16.777.215,
longtext 4.290.000.000

boolean tinyint(1) 0-1
tinyint 127
mediumint 83.000.000
int 99.999.999.999
bigint 922.000.000.000.000.000,
decimal,  2.098765
double 2.09
time : HH:MM:SS
time, 
datetime: YYYY-MM-DD HH:MM:SS,  === timestamp
YYYYMMDDHHMMSS,  === timestamp
data
-- describe users
*/
INSERT INTO users(name, username, email, password) values('Admin', 'admin', 'admin@gmail.com', '123456');
insert into users set name='le van toan', username='letoan', email='toan@gmail.com', password='123456';
select * from users;
update users set password=md5('123456') where id <=2;
 delete from users where id = 5;

CREATE TABLE products(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) not null,
    description TEXT,
    short_description TEXT,
    slug VARCHAR(255),
    image VARCHAR(255),
    sell_price INT(11) NOT NULL,
    list_price INT(11) NOT NULL,
    category_id INT(11) NOT NULL,
    status INT(11),
    supplier_id INT(11)
);


CREATE TABLE categories(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) not null,
    slug VARCHAR(255),
    image VARCHAR(255),
    parent_id INT(11) NOT NULL,
    status INT(11),
    createt_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO products(name, description, short_description, slug, sell_price, list_price, category_id, status, supplier_id) 
            values  ("SONYE101", "TV Sony", "TV", "SONY-E101", 10000000, 9000000, 1, 1, "SONY101"),
                    ("SONYE102", "TV Sony", "TV", "SONY-E102", 10000000, 9000000, 1, 1, "SONY102"), 
                    ("SAMSUNGE101", "TV Samsung", "TV", "SAMSUNG-E101", 10000000, 9000000, 2, 1, "SAMSUNG101");

INSERT INTO categories(name, slug, parent_id, status) 
            values  ("TVSONY", "TV-SONY", 0, 1),
                    ("TVSAMSUNG", "TV-SAMSUNG", 0, 1);

-- crud 
-- c : create 
-- r: read/retrieve
-- u: update 
-- d: delete/destroy


select name, slug, sell_price from products where id > 3;
update products set stock = 20 where id in(1,3,5);

select id, name, sell_price, stock, sell_price*stock as 'Total Stock' from products;
 select max(stock) as max_stock from products;
 select avg(stock) as max_stock from products;
 select distinct(supplier_id) as suppliers from products;
 select id, name, sell_price, if(status = 1, 'hien thi', 'khong hien thi') from products;
 select * from products where name like '%sonye101%';
 select * from products group by supplier_id having status = 1;