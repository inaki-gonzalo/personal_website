CREATE TABLE USERS (
    user_id text primary key,
    user_key_hash text,
    user_group text default ''
);
CREATE TABLE DEVICES (
    device_id bigserial primary key,
    device_human_tag text default '',
    device_key_hash text,
    device_owner text
);
CREATE TABLE SENSORS (
    sensor_id int primary key,
    sensor_human_tag text default '',
    sensor_owner text
);
CREATE TABLE DATA_REAL (
    data_index bigserial primary key,
    data_sensor_id int,
    data_value real,
    data_device_time timestamp,
    data_server_time timestamp
);
