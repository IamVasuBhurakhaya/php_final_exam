# 🚆 PHP API Practical Exam - Railway Train Booking System

This project is a PHP-based RESTful API developed for a **Railway Train Booking System**, designed to be consumed by a **Flutter frontend**. It demonstrates practical implementation of CRUD operations with **foreign key constraints (ON CASCADE)** using **MySQL**.

---

## 📚 Modules Implemented

The project includes the following modules:

1. **Trains**
2. **Passengers**

All modules are interconnected with proper **foreign key relations** and handle **ON CASCADE** delete/update functionality where applicable.

---

## 🔧 Functionalities

All CRUD functionalities are implemented for each table:

## Screenshot

---

## 🔗 Foreign Key Implementation

Foreign key constraints have been implemented across the modules to ensure data integrity. The `ON DELETE CASCADE` and `ON UPDATE CASCADE` options are enabled to ensure relational consistency.

Example:
```sql
FOREIGN KEY (train_id) REFERENCES trains(id) ON DELETE CASCADE ON UPDATE CASCADE

