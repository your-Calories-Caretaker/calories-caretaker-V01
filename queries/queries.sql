create table users(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(255) not null,
    last_name varchar(255),
    email varchar(255) not null unique,
    password varchar(255) not null,
    city_id int
);

create table bmi(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    weight int not null,
    height int not null,
    BMI  real not null
);

create table states(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null unique,
);

create table cities(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    state_id int,
    city_name varchar(255) not null unique
);

ALTER TABLE users
ADD FOREIGN KEY (city_id)
REFERENCES cities(id); 

ALTER TABLE bmi
ADD FOREIGN KEY (user_id)
REFERENCES users(id);

ALTER TABLE cities
ADD FOREIGN KEY (state_id)
REFERENCES states(id); 