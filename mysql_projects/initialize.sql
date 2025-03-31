drop database if exists mydb;
create database mydb;
create user mydbuser@localhost identified by 'nd2Ur3Cr';
grant all on mydb.* to 'mydbuser'@'localhost';