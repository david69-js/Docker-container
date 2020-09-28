UPDATE vendors
SET comission=0.5
WHERE salary >= 3000;

#Mostrar fechas menores a '2018-07-1'
SELECT name FROM vendors where higt_date < '2018-07-1';

#Dias laborados de un empleado
SELECT name, DATEDIFF(curdate(), '2020-09-17') as 'Dias laborando' from vendors;

#Nombre, apellido en la misma columna y fecha de registro, dia de registro
select concat(name,' ',surname) as 'Names and Surname', higt_date as 'Register date', 
dayname(higt_date) as 'Register Day'
from vendors;

#Nombre y salario de los ayudantes de tienda 
select name as 'Name', salary as 'Salary' from vendors where position = 'Ayudante de tienda';

#Mostrar todos los nombres de los coches que tengan la letra a y cuyo modelo empiece por r 
select brand from cars where brand like '%a%' and model like 'r%';

#mostrar todos los vendedores del grupo numero dos ordenados por salario de mayor a menor
select name, salary from vendors where group_id = 2 order by salary desc;

#apellidos de los vendedores, su fecha y numero de grupo, ordenado por fecha descendente mostrar los cuatro ultimos
select surname, higt_date as 'date', group_id as 'group number'
from vendors order by higt_date desc limit 5,9; 

#Vizualizar cada cargo y numero de mens haya en cada cargo
select position as 'Cargos', count(position) as 'Numero' 
from vendors 
group by position 
order by count(position) desc;

#Salario anual de los empleados 
select sum(salary*12) as 'Salario anual del Concesionario' from vendors;

#Sacar la media salarial de cada uno de los vendedores por grupo
select vg.name, sum(v.salary)/count(v.group_id) #avg(v.salary) master
from vendors v
inner join vendor_group vg on vg.id = group_id
group by v.group_id;

#Visualizar el numero de las unidades de carros vendidos de cada coche a cada cliente,
#mostrando el nombre del producto, numero del cliente, y suma de unidades

select c.model, cl.name, sum(o.quantity)
from orders o
inner join  clients cl on cl.id = o.client_id
inner join cars c on c.id= o.car_id 
group by o.car_id, o.client_id;

#Mostrar clientes con mas pedidos realizados
select c.name, max(o.quantity) 
from clients c 
inner join orders o on o.client_id = c.id 
group by o.id order by quantity desc limit 2;

#clientes atendidos por davis
select c.name 'Atendidios por david '
from orders o 
inner join clients c on c.id = o.client_id
group by c.name;

#obtener un lisatado de compras de de cliente
SELECT o.id, cl.name AS 'Cliente', c.brand AS 'Vehículo', o.quantity, o.date 
FROM orders o
INNER JOIN clients cl ON cl.id = o.client_id AND cl.name = 'mercedes'
INNER JOIN cars c ON c.id = o.car_id;


select cl.id ,cl.name, count(c.brand)
from  cars c 
inner join orders o on o.car_id = c.id
inner join clients cl on o.client_id = cl.id and cl.name = 'Mercedes'
group by cl.id;

#Listado de clientes que han echo pedidos de tal marca
select * from clients cl
inner join orders o on o.client_id = cl.id
inner join cars c on c.id = o.car_id and c.brand = 'renaul';

#vendedores con tres o mas clientes
select v.name, count(cl.id)
from vendors v
inner join clients cl on cl.vendors_id = v.id
group by v.id having count(cl.id) > 2 ;

#seleccionar el grupo donde trabaje el vendedor con mayor salario
select vg.name, max(salary) from vendor_group vg
inner join vendors v on v.group_id = vg.id
group by v.id order by v.salary desc limit 1;

select vg.name,vg.city,v.salary from vendor_group vg
inner join vendors v on v.group_id = vg.id where v.salary in
(select max(salary) from vendors);

#Nombres y ciudades de los clientes que tienen empleados
select c.id, c.name, c.city from clients c
inner join orders o on o.client_id = c.id  where quantity > 3;

#nombre de cliente id, nombre y nombre de vendedor e id 
select c.id, c.name, v.id, v.name 
from clients c, vendors v
where c.vendors_id= v.id;

select c.id as 'Numero de Cliente', c.name as'Nombre', v.id as 'Numero de vendedor', v.name as'Nombre'  
from clients c 
inner join vendors v on v.id = c.vendors_id;

#Listar todos los encargos realizados con la marca del coche y los nombres de los clientes
select o.id,c.brand, cl.name from orders o, cars c, clients cl
where o.car_id = c.id and o.client_id = cl.id;

select o.id, c.brand, cl.name from orders o
inner join cars c on c.id = o.car_id
inner join clients cl on cl.id = o.client_id;


select o.id, c.brand, cl.name, cl.city from orders o
inner join cars c on c.id = o.car_id
inner join clients cl on cl.id = o.client_id 
where cl.city = 'izabal';

#nombre de los clientes con su importe acumulado
select cl.name, sum(spent*quantity) as 'Importe acumulado'from clients cl
inner join orders o on o.client_id = cl.id
group by cl.name;

#Vendedores que tienen jefe y el nombre de los vendedores 
SELECT v1.name AS 'Vendedores', v2.name AS 'Jefe' FROM vendors v1
INNER JOIN vendors v2 ON v1.id = v2.boss;

#Mostrar nombre de clientes con encargos y clientes sin encargos
select name, id from clients where id in (select client_id from orders);

select c.name, c.id, count(o.id) from clients c
left join orders o 
on c.id = o.client_id
group by c.id;

#Mostrar nombre de los vendedores con el numero del cliente, tengan o no 
select v.id,v.name, count(c.id) as 'numero de clientes' from vendors v
left join clients c on c.vendors_id = v.id
group by v.id;

#vendedores del grupo a 
create view vendedoresA as
select concat(v.name, ' ', v.surname) as 'Venderores del Grupo A', vg.city as 'Ciudad' from vendors v
inner join vendor_group vg on vg.id = v.group_id where vg.name = 'Group a';

#mostar los datos del vendedors con mas antiguedad
select * from vendors order by higt_date asc limit 1;

#coche con mas unidades vendidas
select c.id, c.model, o.quantity from orders o 
inner join cars c on c.id = o.car_id order by quantity desc limit 1;