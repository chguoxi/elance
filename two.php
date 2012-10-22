<?php
//查找数据库中第二大的值
//this is better-----------------------------------------------------------
$sql = 'SELECT id FROM user ORDER BY id DESC LIMIT 1,1';


//this not so good---------------------------------------------------------
$sql_1 = 'SELECT max( uid ) AS id
FROM users
WHERE uid < (
SELECT max( uid )
FROM users ) ';
