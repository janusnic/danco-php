/*
 База данных для гостевой книги - guestbook. 
 1. guestbook_id - уникальный идентификатор записи
 2. guestbook_user_name - имя пользователя оставившего отзыв
 3. guestbook_message_text - текст отзыва
 4. guestbook_data - дата отправки отзыва
*/
 
create table guestbook
(
  guestbook_id integer not null auto_increment primary key,
  guestbook_user_name varchar(100),
  guestbook_message_text text,
  guestbook_data date
);
 
/* Для примера добавим несколько своих записей в новую гостевую книгу */
insert into guestbook values (0, "Ivan Ivanov", "Thanks for the article!", "2012.10.19");
insert into guestbook values (0, "Petr Petrov", "I do not really like this article (", "2012.11.09");
insert into guestbook values (0, "Sidorov Sidorov", "I do not like this article.", "2011.08.01");
insert into guestbook values (0, "Maksim Maksimov", "I do not like your entire site.", "2012.12.29");

