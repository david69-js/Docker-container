#Create tables 

CREATE TABLE cars(
id          INT(11) NOT NULL auto_increment ,
model       VARCHAR(100) NOT NULL,
price       INT(20) NOT NULL,
brand       VARCHAR(100) NOT NULL,
stock       INT(250) NOT NULL,
CONSTRAINT PK_cars PRIMARY KEY (id)
);

CREATE TABLE vendor_group(
id          INT(11) NOT NULL auto_increment,
name        VARCHAR(100) NOT NULL,
city        VARCHAR(100) NOT NULL,
CONSTRAINT PK_vendor_group PRIMARY KEY (id)    
);

CREATE TABLE vendors(
id          INT(11) NOT NULL auto_increment,    
group_id    INT(11) NOT null,
name        VARCHAR(100) NOT NULL,
surname     VARCHAR(100) NOT NULL,
position    VARCHAR(50) NOT NULL,
higt_date   DATE NOT NULL,
salary      FLOAT(20, 2) NOT NULL,
comission   FLOAT(10, 2) NOT NULL,
boss        INT(10) NOT NULL,
CONSTRAINT PK_vendors PRIMARY KEY (id),
FOREIGN KEY (group_id) REFERENCES vendor_group(id),
FOREIGN KEY (boss) REFERENCES vendors(id)
);

CREATE TABLE clients(
id          INT(11) NOT NULL auto_increment,     
vendors_id   INT(11) NOT NULL,  
name        VARCHAR(100) NOT NULL,
city        VARCHAR(100) NOT NULL,
date        DATE NOT NULL,
spent       FLOAT(100,2) NOT NULL,
CONSTRAINT PK_clients PRIMARY KEY (id),
FOREIGN KEY (vendors_id) REFERENCES vendors(id)
);

CREATE TABLE orders(
id              INT(11) NOT NULL auto_increment,
client_id       INT(11) NOT NULL,  
car_id          INT(11) NOT NULL,  
quantity        INT(10) NOT NULL,
date            DATE NOT NULL,
CONSTRAINT PK_orders PRIMARY KEY (id),
FOREIGN KEY (client_id) REFERENCES clients(id),
FOREIGN KEY (car_id) REFERENCES cars(id)
);

/*fill data base*/

/*cars*/


/*i*/