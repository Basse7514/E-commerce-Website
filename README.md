# 🛒 Grocery Store E-commerce Website | Full-Stack Web Application

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

A comprehensive e-commerce platform for a grocery store, developed using **PHP** and **MySQL**. This project features a modern user interface and a powerful admin dashboard for seamless store management.

---

## 🚀 Key Features

### 👤 User Side:
- **Authentication System**: User registration and secure login with password encryption.
- **Dynamic Product Browsing**: Explore products categorized by Fruits, Meat, Vegetables, and Fish.
- **Quick Search**: Real-time product search by name.
- **Shopping Cart**: Add items, update quantities, and manage the cart seamlessly.
- **Wishlist**: Save favorite products for later purchase.
- **Secure Checkout**: Complete orders and track their delivery status.
- **User Profile**: Personalize account details and profile pictures.
- **Contact System**: Send inquiries and feedback directly to the administrators.

### 🛡️ Admin Dashboard:
- **Live Overview**: Track total products, orders, active users, and incoming messages.
- **Product Management**: Full CRUD (Create, Read, Update, Delete) functionality for store inventory.
- **Order Management**: Review customer orders and manage payment/delivery statuses (Pending / Completed).
- **User Control**: Manage registered user accounts and permissions.
- **Message Management**: Access and respond to customer inquiries from the contact page.

---

## 🛠️ Technology Stack

- **Backend**: PHP (PDO-based for database security and efficiency).
- **Database**: MySQL.
- **Frontend**: Responsive HTML5, CSS3, and Vanilla JavaScript.
- **Icons**: Font Awesome 6.
- **User Experience**: Smooth CSS transitions and mobile-friendly design.

---

## ⚙️ Installation & Setup

1.  **Clone/Download**: Place the project files in your local server's `htdocs` directory (e.g., XAMPP or WAMP).
2.  **Database Configuration**:
    - Open `phpMyAdmin`.
    - Create a new database named `shop_db`.
    - Import the provided `shop_db.sql` file.
3.  **Connection Setup**:
    - Ensure your database credentials match in `config.php`:
      ```php
      $db_name = "mysql:host=localhost;dbname=shop_db";
      $username = "root";
      $password = "";
      ```
4.  **Run Application**: Visit `http://localhost/E-commerce-Website/login.php` in your browser.

---

## 📸 Screenshots

> [!NOTE]
> Visual showcase coming soon. You can add your own screenshots into the `project images` folder and link them here.

---

## 📄 License
This project is open-source and intended for educational and development purposes.

---

**Developed by: [Bassel]**
**2-Year of SUT | Software Engineering Project**