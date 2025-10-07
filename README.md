## Database structure

### Application Form

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

```
