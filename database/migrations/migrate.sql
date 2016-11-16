
-- USERS (LARAVEL AUTH)
create table `users` (`id` int unsigned not null auto_increment primary key,
 `name` varchar(255) not null, `email` varchar(255) not null, `password` varchar(255) not null, 
`remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default 
character set utf8 collate utf8_unicode_ci;

alter table `users` add unique `users_email_unique`(`email`);

create table `password_resets` (`email` varchar(255) not null, `token` varchar(255) not null, `created_at` 
timestamp null) default character set utf8 collate utf8_unicode_ci;

alter table `password_resets` add index `password_resets_email_index`(`email`);

alter table `password_resets` add index `password_resets_token_index`(`token`);

-- TICKETS
create table `tickets` (`id` int unsigned not null auto_increment primary
key, `title` varchar(255) not null, `content` text not null, `slug` varchar(255) null, `status` tinyint
not null default '1', `user_id` int null, `created_at` timestamp null, `updated_at` timestamp null) 
default 
character set utf8 collate utf8_unicode_ci;

-- COMMENTS
create table `comments` (`id` int unsigned not null auto_increment primary key, `content` text not null, 
`post_id` int not null, `user_id` int null, `status` tinyint not null default '1', `created_at` timestamp 
null, `updated_at` timestamp null) default character set utf8 collate utf8_unicode_ci;


-- PERMISSIONS MIDDLEWARE
create table `roles` (`id` int unsigned not null auto_increment primary key, `name` varchar(255) not 
null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8 collate 
utf8_unicode_ci;

alter table `roles` add unique `roles_name_unique`(`name`);

create table `permissions` (`id` int unsigned not null auto_increment primary key, `name` varchar(255) 
not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8 collate 
utf8_unicode_ci;

alter table `permissions` add unique `permissions_name_unique`(`name`);

create table `user_has_permissions` (`user_id` int unsigned not null, `permission_id` int unsigned not 
null) default character set utf8 collate utf8_unicode_ci;
 
alter table `user_has_permissions` add constraint `user_has_permissions_user_id_foreign` foreign key 
(`user_id`) references `users` (`id`) on delete cascade;

alter table `user_has_permissions` add constraint `user_has_permissions_permission_id_foreign` foreign 
key (`permission_id`) references `permissions` (`id`) on delete cascade;

alter table `user_has_permissions` add primary key 
`user_has_permissions_user_id_permission_id_primary`(`user_id`, `permission_id`);

create table `user_has_roles` (`role_id` int unsigned not null, `user_id` int unsigned not null) default 
character set utf8 collate utf8_unicode_ci;

alter table `user_has_roles` add constraint `user_has_roles_role_id_foreign` foreign key (`role_id`) 
references `roles` (`id`) on delete cascade;
 
alter table `user_has_roles` add constraint `user_has_roles_user_id_foreign` foreign key (`user_id`) 
references `users` (`id`) on delete cascade;
 
alter table `user_has_roles` add primary key `user_has_roles_role_id_user_id_primary`(`role_id`, 
`user_id`);

create table `role_has_permissions` (`permission_id` int unsigned not null, `role_id` int unsigned not 
null) default character set utf8 collate utf8_unicode_ci;
 
alter table `role_has_permissions` add constraint `role_has_permissions_permission_id_foreign` foreign 
key (`permission_id`) references `permissions` (`id`) on delete cascade;

alter table `role_has_permissions` add constraint `role_has_permissions_role_id_foreign` foreign key 
(`role_id`) references `roles` (`id`) on delete cascade;

alter table `role_has_permissions` add primary key 
`role_has_permissions_permission_id_role_id_primary`(`permission_id`, `role_id`);

