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

<img src="https://github.com/user-attachments/assets/bc6d56f8-5685-449e-b1cb-22eeb0e0f18e" width="350" >
<img src="https://github.com/user-attachments/assets/77fa679c-d361-4b20-96e4-ea83b5aca69b" width="350" >
<img src="https://github.com/user-attachments/assets/6ddb99e7-e1c0-47c6-bed4-fa3ece1b4f83" width="350" >
<img src="https://github.com/user-attachments/assets/4782f0db-fb64-4ef2-8b6a-969a61d88b48" width="350" >
<img src="https://github.com/user-attachments/assets/066e2661-ab77-464f-a9e2-b2913a0a3667" width="350" >
<img src="https://github.com/user-attachments/assets/ac35b29c-fec3-4a29-aac7-10ddcc454373" width="350" >
<img src="https://github.com/user-attachments/assets/a1288bf2-b58f-42e4-8eba-52d16a61ede9" width="350" >
<img src="https://github.com/user-attachments/assets/190b7f91-119e-4f98-95aa-371f7b0de06a" width="350" >
<img src="https://github.com/user-attachments/assets/ba3c31c4-6a04-46d5-a6e2-17816213cbf8" width="350" >
<img src="https://github.com/user-attachments/assets/cb1a357b-998c-4eb5-a845-adbe071b442f" width="350" >


---

## 🔗 Foreign Key Implementation

Foreign key constraints have been implemented across the modules to ensure data integrity. The `ON DELETE CASCADE` and `ON UPDATE CASCADE` options are enabled to ensure relational consistency.

Example:
```sql
FOREIGN KEY (train_id) REFERENCES trains(id) ON DELETE CASCADE ON UPDATE CASCADE

