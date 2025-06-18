# 🏠 SunriseHome - Real Estate Website

A modern, responsive real estate website for listing, exploring, and managing properties. Built with HTML, CSS, JavaScript, and PHP, this platform enables users to search for properties, submit listings, manage their profile, and interact with the platform through a user-friendly dashboard.

## 🚀 Key Features

### 🧑‍💼 User Functionality
- 🔐 User Registration & Login system
- 🧭 Personalized Dashboard for users
- 📄 View & Edit Profile, Change Password
- 🏗️ Submit Property listings
- 🏘️ Explore available property listings
- 💼 Fully responsive design across devices

### 🏢 Admin Functionality (Optional)
- 📋 View & manage submitted properties
- 🧑 Manage registered users
- 🚨 Approve/Reject new listings

### 📑 Pages Included
- 🏠 Home Page — Elegant UI with featured listings
- 🏘️ Properties Page — Explore property types (House, Villa, Plot, etc.)
- 🔍 Property Details Page — Full info with contact option
- 👤 Dashboard — Access profile, listings, and settings
- 📄 About Us & Terms and Conditions
- ✉️ Contact Us — Send inquiries with a working form

## 💡 Tech Stack
- 🖥️ HTML5, CSS3, JavaScript
- 🎨 Bootstrap / Custom CSS
- 🐘 PHP for backend logic
- 🗄️ MySQL for database
- 🔐 Session-based user authentication

## 🛠️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/sunrisehome-realestate.git
   ```

2. Import the SQL database:
   - Open **phpMyAdmin**
   - Create a database (e.g., `realestate_db`)
   - Import `realestate.sql` from the project root

3. Configure database connection:
   - Open `config/db.php` or `includes/db.php`
   - Update with your local DB credentials:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $dbname = "realestate_db";
     ```

4. Host with local server:
   - Use **XAMPP** or **WAMP**
   - Place files in `htdocs/` and start Apache & MySQL

5. Visit in browser:
   ```
   http://localhost/sunrisehome-realestate/
   ```

## 🤝 Contribution
Pull requests are welcome. For feature requests or bug reports, please open an issue first.

---

## 📧 Contact
For queries or feedback, contact: `2022ag7999@uaf.edu.pk`
