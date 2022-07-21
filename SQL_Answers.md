# SQL_Answers


# TABLE B

### 1. Как бы вы нашли вторую по величине зарплату в этой таблице? 
 - > select max(salary) from employee where salary not in (select max(salary) from employee)
 - > select created_at from files order by created_at desc offset 1 limit 1;



# TABLE W

### 1. Написать запрос на выборку записей с уникальными значениями в поле Country.

### 2. Написать запрос на обновление поля PostalCode = 603065. Обновить записи с id больше 4 и меньше 2. 

### 3. Удалить только те записи, у которых в поле ContactName присутствует имя Maria.



# PG

### 1. Чем отличаются команды DELETE и TRUNCATE?
 - DELETE используется для удаления одной или большего числа существующих таблиц.
 - TRUNCATE удаляет все данные внутри таблицы.
 - TRUNCATE — это команда DDL, а DELETE — команда DML.
 - При помощи TRUNCATE мы не можем активировать триггер, а с DELETE можем.

 
