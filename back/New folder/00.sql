
1>Create a table 
Syntax: 
CREATE TABLE tableName(
    col1 type (NOT) NULL AUTO_INCREMENT (PRIMARY KEY),
    col2 type (NOT) NULL,
    col3 type (NOT) NULL
);

ex)
CREATE TABLE `students`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(10) NOT NULL, 
    `grade` INT NOT NULL,
    `class` INT NULL,
    `club` varchar(20) NULL
);

2>Insert value(s) to a table 
Syntax: INSERT INTO tableName ( col1, col2, col3) VALUES( value1, value2, value3);


ex)
INSERT INTO `students` (`name`, `grade`, `class`, `club`) 
    VALUES ( 'James Hopper', 3, 11, "Music club"),
            ( "Gulan Keys", 2, 1, "Art club"),
            ( "John Cameron", 6, 10, NULL),
            ( "Harry Potter", 5, 8, "Drama club"),
            ( "Elen Musk", 1, 11, NULL);

 *Insert multiple datas 
    =>? "Can I insert a data before the first row?????"

 *Data formats
    1)String data => "James Hopper"  
    2)Numeric data => 3304
    3)NULL => Not string.. just NULL *without ""!*

 *The position where inserted datas will be added? After the last row..
 ex)
 +----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     6 |    10 | NULL       | NULL |
|  4 | Harry Pott |     5 |     8 | Drama club | NULL |
|  5 | Elen Musk  |     1 |    11 | NULL       | NULL |
+----+------------+-------+-------+------------+------+
But, after I inserted the datas for the age field, the table will look like this..

INSERT INTO `students`(`age`) 
    VALUES (7), (8);

+----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     6 |    10 | NULL       | NULL |
|  4 | Harry Pott |     5 |     8 | Drama club | NULL |
|  5 | Elen Musk  |     1 |    11 | NULL       | NULL |
|  6 |            |     0 |  NULL | NULL       |    7 |
|  7 |            |     0 |  NULL | NULL       |    8 |
+----+------------+-------+-------+------------+------+


3>Alter the data of a table (ADD/ DROP/ MODIFY a column)
Syntax: 
(1)ADD a column
ALTER TABLE tableName ADD COLUMN columnName TYPE (NOT) NULL OTHER DATAS;
ex)ALTER TABLE `students` ADD COLUMN `age` INT NULL;

(2)DROP a column
Syntax:
ALTER TABLE tableName DROP COLUMN columnName;
ex)ALTER TABLE `students` DROP COLUMN `age`;

(3)MODIFY the characteristics of a column( type, (not) null, PRIMARY KEY ..etc.)
=>?) When I change the type of a column, the datas of the column will be preserved or be broken?


4>Update values

I can update the value(s) of a single col or multiple cols with a single or multiple condition.

  Syntax: UPDATE tableName SET col1= value1 [, col2=value2, ... ] WHERE col3= certainValue AND/OR col4= certainValue;

 (1)Using one condition!
ex)UPDATE `students` SET `age`= 12, `name`= "Mark Max" WHERE `id` = 1;
 
 * If the condition is met to multiple rows, updating can change the datas on different rows:
 //Lets say that all students in the first grade should join the drama club.
  UPDATE `students` SET `grade` = 1 WHERE `club`= "Drama club";
 
 BEFORE:
+----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | NULL       | NULL | ****
|  4 | Harry Pott |     5 |     8 | NULL       | NULL |
|  5 | Elen Musk  |     1 |    11 | NULL       | NULL | ****
|  8 | Cloe Kim   |     5 |     8 | NULL       | NULL |
+----+------------+-------+-------+------------+------+

 AFTER:

| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | Drama club | NULL | ****
|  4 | Harry Pott |     5 |     8 | NULL       | NULL |
|  5 | Elen Musk  |     1 |    11 | Drama club | NULL | ****
|  8 | Cloe Kim   |     5 |     8 | NULL       | NULL |
+----+------------+-------+-------+------------+------+


(2)Using multiple conditions!!
  ex) 
  Lets say, students in the 5th grade & in the 8 class all joined "Book club"!!
  UPDATE `students` SET `club`= "Book club" WHERE `grade`= 5 AND `class`= 8;

  BEFORE:
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | Drama club | NULL | 
|  4 | Harry Pott |     5 |     8 | NULL       | NULL | ***
|  5 | Elen Musk  |     1 |    11 | Drama club | NULL | 
|  8 | Cloe Kim   |     5 |     8 | NULL       | NULL | ***
+----+------------+-------+-------+------------+------+

  AFTER:
+----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | Drama club | NULL |
|  4 | Harry Pott |     5 |     8 | Book club  | NULL |
|  5 | Elen Musk  |     1 |    11 | Drama club | NULL |
|  8 | Cloe Kim   |     5 |     8 | Book club  | NULL |
+----+------------+-------+-------+------------+------+


5>Delete row(s) 
Syntax: DELETE FROM tableName WHERE col1 = value1 AND/OR col2 = value2;
ex)Lets say, students whose id is 5, 8 transfered to another school.  
DELETE FROM `students` WHERE `id`=5 OR `id`=8;
 BEFORE:
 +----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | Drama club | NULL |
|  4 | Harry Pott |     5 |     8 | Book club  | NULL |
|  5 | Elen Musk  |     1 |    11 | Drama club | NULL |
|  8 | Cloe Kim   |     5 |     8 | Book club  | NULL |
|  9 | Susan K.J. |     5 |    12 | NULL       | NULL |
| 10 | Anjelina J |     5 |    13 | NULL       | NULL |
+----+------------+-------+-------+------------+------+

 AFTER:
 +----+------------+-------+-------+------------+------+
| id | name       | grade | class | club       | age  |
+----+------------+-------+-------+------------+------+
|  1 | James Hopp |     3 |    11 | Music club | NULL |
|  2 | Gulan Keys |     2 |     1 | Art club   | NULL |
|  3 | John Camer |     1 |    10 | Drama club | NULL |
|  4 | Harry Pott |     5 |     8 | Book club  | NULL |
|  9 | Susan K.J. |     5 |    12 | NULL       | NULL |
| 10 | Anjelina J |     5 |    13 | NULL       | NULL |
+----+------------+-------+-------+------------+------+

6>SELECT datas from a single or multiple tables
Syntax:
SELECT col1, col2, col3 FROM table1, table2;

*When I select datas from multiple tables whice have no relations to each other,
something wired will happen! 
ex)
SELECT `first_name`, `nation` FROM `address`, `person`;
+------------+--------+
| first_name | nation |
+------------+--------+
| Mark       | U.S.   |
| Mark       | U.S.   |
| Mark       | U.S    |
| Mark       | U.K    |
| Brendan    | U.S.   |
| Brendan    | U.S.   |
| Brendan    | U.S    |
| Brendan    | U.K    |
| William    | U.S.   |
| William    | U.S.   |
| William    | U.S    |
| William    | U.K    |
| Margaret   | U.S.   |
| Margaret   | U.S.   |
| Margaret   | U.S    |
| Margaret   | U.K    |
+------------+--------+
Notice the repetition of datas, the ways of how datas of each tables are repeated are different. 

What if I change the postion of the tables in the query??? Result is the same...
SELECT `nation`, `first_name` FROM `address`, `person`;
   =>The ways of repeatition of each tables appear same as above. 
+--------+------------+
| nation | first_name |
+--------+------------+
| U.S.   | Mark       |
| U.S.   | Mark       |
| U.S    | Mark       |
| U.K    | Mark       |
| U.S.   | Brendan    |
| U.S.   | Brendan    |
| U.S    | Brendan    |
| U.K    | Brendan    |
| U.S.   | William    |
| U.S.   | William    |
| U.S    | William    |
| U.K    | William    |
| U.S.   | Margaret   |
| U.S.   | Margaret   |
| U.S    | Margaret   |
| U.K    | Margaret   |
+--------+------------+

ex)Lets say, I want to get a data from the `first name` col of `person` table and a data from the `nation` col of `address` table.
the datas should be of the person whose `id` is 1. 
 SELECT `first_name`, `nation` FROM `address` as a, `person` as p WHERE a.person_id = 1 AND p.id = 1;
+------------+--------+
| first_name | nation |
+------------+--------+
| Mark       | U.S.   |
+------------+--------+

7)Conditions:
(1)When UPDATE/DELETE/SELECT ing...
    WHERE (NOT) condition1 AND/OR (NOT)condition2;
(2)When Joing..
    ON (NOT) condition1 AND/OR (NOT)condition2;

    