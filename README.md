# 🎮 Who Wants to Be a Millionaire?

A web-based Armenian-language version of the classic quiz game “Who Wants to Be a Millionaire?”, built with PHP, JavaScript, and MySQL. Players register, log in, answer multiple-choice questions of increasing difficulty, and try to reach the top prize. An admin panel lets the game's questions be managed.

🎤 **Presentation:** [View the project on Prezi](https://prezi.com/p/ubycnxoofbqz/?present=1)

---

## ✨ Features

- **User accounts:** registration and login system
- **Gameplay:** multiple-choice questions with sound effects and images
- **Win / lose screens:** end-of-game results and a credits page
- **Admin panel:** manage game content through a separate admin page
- **AJAX communication:** the game talks to the server without reloading the page
- **Database-driven:** questions and user data stored in a MySQL database
- [Add more: lifelines such as 50:50 / Phone a Friend / Ask the Audience, leaderboard, difficulty levels, etc.]

## 🛠️ Tech Stack

| Area | Technology |
|------|------------|
| Backend | PHP |
| Frontend | HTML, CSS, JavaScript |
| Database | MySQL |
| Communication | AJAX / API endpoints |

## 📁 Project Structure

```
Millionaire/
├── index.php          # Entry point / main page
├── play.php           # Game page
├── login.php / .js    # Login page and logic
├── register.php / .js # Registration page and logic
├── admin.php / .js    # Admin panel
├── api.php            # Server API endpoints
├── ajax.js            # AJAX requests
├── functions.php      # Shared PHP helper functions
├── config.php         # Database configuration
├── script.js          # Main game logic
├── style.css          # Styling
├── win.html           # Win screen
├── lose.html          # Lose screen
├── credits.html       # Credits page
├── millionaire.sql    # Database structure and data
├── DataBase/          # Database-related files
├── audio/             # Game sounds
└── images/            # Game images
```

## 🚀 Getting Started

### Requirements
- A local server with PHP and MySQL, such as [XAMPP](https://www.apachefriends.org/), WAMP, or MAMP

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Sam-Khach/Millionaire.git
   ```
2. **Move the project** into your server's web folder (for example `htdocs` in XAMPP).
3. **Create the database**
   - Open phpMyAdmin
   - Create a new database (for example `millionaire`)
   - Import the `millionaire.sql` file
4. **Configure the connection**
   - Open `config.php`
   - Set your database host, name, username, and password
5. **Run the game**
   - Start Apache and MySQL
   - Open `http://localhost/Millionaire/` in your browser

## 🎯 How to Play

1. Register a new account and log in.
2. Start a new game.
3. Answer each question by choosing one of the options.
4. A correct answer moves you to the next question; a wrong answer ends the game.
5. Reach the final question to win!

## 📚 What I Learned

- Building a full-stack web application with PHP and MySQL
- Designing a relational database and writing SQL queries
- Handling user authentication (registration and login)
- Using AJAX to build a smoother user experience
- Organizing a project with separate frontend, backend, and admin sections

## 👤 Author

**Samvel Khachatryan**
Data Analyst | Computer Engineering student, National Polytechnic University of Armenia

🔗 [LinkedIn](https://www.linkedin.com/in/samvel-khachatryan-70244a295/) · 💻 [GitHub](https://github.com/Sam-Khach)

---

*This project was created for learning purposes and is not affiliated with the official TV show.*
