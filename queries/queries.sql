create table users(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(255) not null,
    last_name varchar(255),
    email varchar(255) not null unique,
    password varchar(255) not null,
    city_id int
);

create table admin(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    user_id int
)

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

create table categories(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null unique
)

create table food_items(
    item_id int not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null,
    category_id int,
    serving_type varchar(255) not null,
    weight varchar(255) not null
    calories int,  
)

create table history(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    item_id int,
    quantity int,
    added_at date default current_timestamp()
)

create table item_suggestions(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    item_name varchar(255) not null,
    category_id int,
    user_id int
)

create table category_suggestions(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    category_name varchar(255) not null,
    user_id int
)

ALTER TABLE users
ADD FOREIGN KEY (city_id)
REFERENCES cities(id) ON DELETE SET NULL; 

ALTER TABLE bmi
ADD FOREIGN KEY (user_id)
REFERENCES users(id) ON DELETE CASCADE;

ALTER TABLE cities
ADD FOREIGN KEY (state_id)
REFERENCES states(id);

ALTER TABLE admin
ADD FOREIGN KEY (user_id)
REFERENCES users(id)  ON DELETE CASCADE;

ALTER TABLE food_items
ADD FOREIGN KEY (item_id)
REFERENCES categories(id)  ON DELETE CASCADE;

ALTER TABLE food_items ADD UNIQUE (name);

ALTER TABLE history
ADD FOREIGN KEY (user_id)
REFERENCES users(id)  ON DELETE CASCADE;

ALTER TABLE history
ADD FOREIGN KEY (item_id)
REFERENCES food_items(item_id)  ON DELETE CASCADE;

ALTER table history
ADD meal_type varchar(255);

ALTER TABLE item_suggestions
ADD FOREIGN KEY (user_id)
REFERENCES users(id)  ON DELETE CASCADE;

ALTER TABLE item_suggestions
ADD FOREIGN KEY (category_id)
REFERENCES categories(id)  ON DELETE CASCADE;

ALTER TABLE category_suggestions
ADD FOREIGN KEY (user_id)
REFERENCES users(id)  ON DELETE CASCADE;