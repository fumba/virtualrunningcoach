create table `users` (`id` int unsigned not null auto_increment primary key,
 `name` varchar(255) not null, `email` varchar(255) not null, `password` varchar(255) not null, 
`remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default 
character set utf8 collate utf8_unicode_ci;

alter table `users` add unique `users_email_unique`(`email`);

create table `password_resets` (`email` varchar(255) not null, `token` varchar(255) not null, `created_at` 
timestamp null) default character set utf8 collate utf8_unicode_ci;

alter table `password_resets` add index `password_resets_email_index`(`email`);

alter table `password_resets` add index `password_resets_token_index`(`token`);

create table `tickets` (`id` int unsigned not null auto_increment primary
key, `title` varchar(255) not null, `content` text not null, `slug` varchar(255) null, `status` tinyint
not null default '1', `user_id` int null, `created_at` timestamp null, `updated_at` timestamp null) default 
character set utf8 collate utf8_unicode_ci;

create table `comments` (`id` int unsigned not null auto_increment primary key, `content` text not null, 
`post_id` int not null, `user_id` int null, `status` tinyint not null default '1', `created_at` timestamp 
null, `updated_at` timestamp null) default character set utf8 collate utf8_unicode_ci;
