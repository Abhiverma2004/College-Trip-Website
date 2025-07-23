# 🎒 College Trip Registration Website

A simple web-based form application built using **HTML**, **CSS**, **PHP**, and **MySQL**. This project allows students to register for a college trip by submitting their personal details, which are stored in a MySQL database.

---

## ✨ Features

- 📝 Form for collecting student info: name, age, gender, email, phone, and message
- ✅ Data is validated and stored in MySQL
- 📬 Confirmation message after submission
- 🌄 Styled with a responsive and attractive UI using Google Fonts and CSS

---

## 💻 Tech Stack

| Component | Technology Used       |
|----------|------------------------|
| Frontend | HTML, CSS, Google Fonts|
| Backend  | PHP                    |
| Database | MySQL                  |
| Styling  | Custom CSS             |

---

## 📁 Folder Structure

college-trip-form/
├── bg.jpg # Background image
├── index.php # Main form file with PHP backend
├── style.css # CSS styles
├── index.js # Optional JS for interactions
└── README.md # Project documentation

yaml
Copy
Edit

---

## 🚀 Getting Started

### 🔧 Prerequisites

- ✅ [XAMPP](https://www.apachefriends.org/) or any local server with PHP and MySQL
- ✅ PHP 7+ and MySQL 5.7+ installed
- ✅ A browser (Chrome, Firefox, etc.)

---

### 📥 How to Clone This Repository

```bash
git clone https://github.com/Abhiverma2004/college-trip-form.git
cd college-trip-form
Replace yourusername with your actual GitHub username.

⚙️ Setup Instructions
🧩 1. Start XAMPP / Local Server
Open XAMPP

Start Apache and MySQL

🗃️ 2. Create MySQL Database and Table
Go to: http://localhost/phpmyadmin

Create a new database named: trip

Run this SQL query:

sql
Copy
Edit
CREATE TABLE `trip` (
  `sno` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `age` INT NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `other` TEXT,
  `dt` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
);
🌐 3. Access the Web Form
Move the project folder to htdocs (inside XAMPP):

bash
Copy
Edit
mv college-trip-form/ /Applications/XAMPP/htdocs/
Visit in browser:

text
Copy
Edit
http://localhost/college-trip-form/index.php

🔒 Optional Enhancements
Add form validation (client & server side)

Add delete/view records in admin panel

Send confirmation emails using PHPMailer

Use prepared statements to prevent SQL injection

🙋‍♂️ Author
Abhishek Verma
📧 apreevverma2004@gmail.com
🔗 GitHub

🪪 License
This project is open-source and available under the MIT License.
