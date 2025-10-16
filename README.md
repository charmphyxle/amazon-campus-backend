# Amazon College admin panel and API

## Description 

- This is a simple admin panel and an API for Amazon college.

## REQUIREMENTS

- There will be Admin user role.

### DATABASE STRUCTURE

#### APPLICATION FORM

```
first_name ------------------------ required,max:100
last_name ------------------------- required,max:100
email ----------------------------- required,max:255, email, unique:users,email
phone ----------------------------- required,max:15
date_of_birth---------------------- nullable,max:15
nationality ----------------------- nullable,max:50
gender----- ----------------------- nullable,max:50
address --------------------------- nullable,max:150
emergency_contact_name ------------ nullable,max:150
emergency_contact_phone------------ nullable,max:150
```

### Accreditation

```
title ------------------------ required,max:100
year-------------------------- required,max:100
description------------------- required,max:100
badge_title------------------- required,max:100
image------------------------- nullable, image, max:2048, mimes:jpeg,png,jpg,webp

```

### CALENDAR EVENT

```
title ------------------------------- required,max:255
badge_title-------------------------- required,max:255
date--------------------------------- required,date
start_time--------------------------- required,date_format:H:i
end_time----------------------------- nullable, date_format:H:i, after:start_time
description------------------------- nullable, max:255

```
