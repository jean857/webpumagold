-- drop database webpumagold;
create database webpumagold;
use webpumagold;
SET SQL_SAFE_UPDATES = 0;

select * from places;
select * from categories;
select * from services;
select * from company_principles;
select * from certifications;
select * from users;
select * from roles;
select * from permissions;
select * from role_has_permissions;
select * from model_has_roles;
select * from banners;
select * from contacts;
select * from failed_jobs;
delete from password_resets;