
create table `users` (
	`id` int not null primary key auto_increment,
    `login` varchar(50) not null,
    `pwd` varchar(72) not null,
    `status` enum('admin', 'user') not null default 'user',
    `publicName` varchar(150) default null,
    `biography` text,
    `subscribe` datetime not null,
    `connection` datetime default null,
    `maxQuota` bigint not null default 0,
    `usedQuota` bigint not null default 0
);

create table `sponsoring` (
	`code` char(20) not null primary key,
    `sponsor` int not null,
    `description` text not null,
    `quota` bigint not null default 0
);

alter table `users`
add column `sponsor` char(20) default null;

create table `mediatypes` (
	`type` varchar(10) not null primary key,
    `image` boolean not null,
    `video` boolean not null
);

create table `medias` (
	`id` char(32) not null primary key,
	`title` varchar(150) not null,
    `author` varchar(150) default null,
    `source` varchar(300) default null,
    `size` bigint not null,
    `owner` int not null,
    `type` varchar(10) not null,
    `extension` varchar(5) not null
);

create table `media_images` (
	`media` char(32) not null primary key,
    `height` int default null,
    `width` int default null,
    `compression` varchar(50) default null,
    `geoloc` text default null
);

create table `media_videos` (
	`media` char(32) not null primary key,
    `codec` varchar(100) default null,
    `length` decimal default null
);

create table `tags` (
    `id` int not null primary key auto_increment,
    `content` varchar(200) not null unique,
    `color` char(6) default null,
    `status` enum('proposed', 'valid', 'admin'),
    `author` int default null,
    `reserved` boolean not null default 0
);

create table `reserved_tags` (
    `tag` int not null,
    `mediatype` varchar(10) not null,
    primary key(`tag`, `mediatype`)
);

create table `media_tags` (
    `tag` int not null,
    `media` char(32) not null,
    primary key(`tag`, `media`)
);
