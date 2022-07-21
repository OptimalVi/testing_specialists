create table folders
(
    id bigserial primary key,
    parent_id  bigint references folders,
    created_at timestamp default now(),
    updated_at timestamp,
    deleted_at timestamp,
    name       varchar(255),
    slug       varchar(255)
);



create table files
(
    id bigserial primary key,
    folder_id   bigint references folders,
    created_at  timestamp default now(),
    updated_at  timestamp,
    deleted_at  timestamp,
    name        varchar(255),
    slug        varchar(255),
    path        varchar(255),
    description text,
    info        jsonb
);
