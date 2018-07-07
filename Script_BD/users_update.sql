use hirassa_bd;
ALTER TABLE users
ADD is_admin int(1) DEFAULT 0;