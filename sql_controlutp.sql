drop database controlutp;
create database controlutp;

use controlutp;

SHOW FULL TABLES FROM controlutp;

create table degree(
degree_id int auto_increment primary key,
degree varchar(25),
created_at date);
select * from grouputp;
create table specialization(
specialization_id int auto_increment primary key,
specialization varchar(50),
degree_id int,
created_at date,
foreign key (degree_id) references degree(degree_id));

create table student(
student_id int auto_increment primary key,
student_name varchar(50),
last_name varchar(50),
mother_last_name varchar(50),
date_of_birth date,
high_school_mark float,
email varchar(20),
phone varchar(10),
psword varchar(500),
student_status boolean, 
specialization_id int,
created_at date,
updated_at date,
foreign key (specialization_id) references specialization(specialization_id));

create table letter(
letter_id int auto_increment primary key,
letter varchar(5),
created_at date);

create table period(
period_id int auto_increment primary key,
start_month varchar(30),
end_month varchar(30),
created_at date);

create table four_month_period(
fmp_id int auto_increment primary key,
fmp_number int,
period_id int,
created_at date,
foreign key (period_id) references period(period_id));

create table grouputp(
grouputp_id int auto_increment primary key,
fmp_id int,
letter_id int,
shift varchar(20),
created_at date,
foreign key (fmp_id) references four_month_period(fmp_id),
foreign key (letter_id) references letter(letter_id));

create table student_group(
student_id int,
grouputp_id int,
mark varchar(15),
sg_year varchar(4),
foreign key (student_id) references student(student_id),
foreign key (grouputp_id) references grouputp(grouputp_id));

create table subjectutp(
subjectutp_id int auto_increment primary key,
subjectutp varchar(50),
fmp_id int,
created_at date,
foreign key (fmp_id) references four_month_period(fmp_id));

create table specialization_subject(
specialization_id int,
subject_id int,
created_at date,
foreign key (specialization_id) references specialization(specialization_id),
foreign key (subject_id) references subjectutp(subjectutp_id));

create table teacher(
teacher_id int auto_increment primary key,
teacher_name varchar(25),
last_name varchar(25),
mother_last_name varchar(25),
date_of_birth varchar(25),
email varchar(25),
phone varchar(10),
teacher_status boolean,
professional_license  varchar(50),
created_at date,
updated_at date);

create table teacher_specialization(
specialization_id int,
teacher_id int,
foreign key (specialization_id) references specialization(specialization_id),
foreign key (teacher_id) references teacher(teacher_id));

create table teacher_subject(
teacher_id int,
subjectutp_id int,
created_at date,
foreign key (teacher_id) references teacher(teacher_id),
foreign key (subjectutp_id) references subjectutp(subjectutp_id));

create table school_schedule(
ss_id int auto_increment primary key,
ss_name varchar(25),
created_at date);

create table subject_school_schedule(
subjectutp_id int,
ss_id int,
sc_day varchar(15),
start_hour time,
end_hour time,
created_at date,
foreign key (subjectutp_id) references subjectutp(subjectutp_id),
foreign key (ss_id) references school_schedule(ss_id));

/*Mostrar grupos dependiendo de el mes en el aue encuentre*/
select grouputp_id ,four_month_period.fmp_number, letter.letter, period.start_month, period.end_month, grouputp.shift
from grouputp
inner join letter on grouputp.letter_id=letter.letter_id
inner join four_month_period on grouputp.fmp_id=four_month_period.fmp_id
inner join period on four_month_period.period_id=period.period_id
where period.start_month = 'Mayo' and period.end_month = 'Agosto'

/*Inscripcion de un estudiante a un grupo determinado*/
insert (student_id, group_id, 2021) into student_group;