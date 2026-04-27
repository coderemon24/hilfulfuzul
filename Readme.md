# 🌍 Hilful Fuzul Foundation

A Dockerized web application for **Hilful Fuzul Foundation**, a non-profit organization dedicated to social welfare, humanitarian aid, and community development.

---

## 📌 About the Project

**Hilful Fuzul Foundation** is inspired by the historic concept of Hilf al-Fudul — a pact for justice and support for the oppressed.

This platform is built to digitize and manage the foundation’s activities, including:

- 🤝 Social welfare programs
- 📚 Educational initiatives
- 🏥 Healthcare support
- 💰 Donation management
- 🧑‍🤝‍🧑 Volunteer coordination

---

## 🚀 Features

- 🏠 Modern responsive homepage
- 📢 Campaign & program management
- 💳 Donation system (extendable for payment gateways)
- 👥 Volunteer registration system
- 📰 Blog / news management
- 📩 Contact & communication system
- 🔐 Admin dashboard
- ⚡ Fully Dockerized environment

---

## 🛠️ Tech Stack

- **Backend:** Laravel
- **Frontend:** Blade, HTML, CSS, JavaScript, Vue.js, Inertia.js
- **Database:** MySQL
- **Containerization:** Docker & Docker Compose
- **Web Server:** Apache (depending on config)

---

## 🐳 Docker Setup (Recommended)

### 📦 Prerequisites

Make sure you have installed:

- Docker
- Docker Compose

---

### ⚙️ Installation Steps

#### 1️⃣ Clone the repository

```bash
git clone https://github.com/coderemon24/hilfulfuzul.git
cd hilfulfuzul
```

---

#### 2️⃣ Environment Setup

```bash
cp .env.example .env
```

Update `.env` if needed (DB credentials, app name, etc.)

---

#### 3️⃣ Build & Run Containers

```bash
docker-compose up -d --build
```

---

#### 4️⃣ Install Laravel Dependencies

```bash
docker exec -it app composer install
```

---

#### 5️⃣ Generate App Key

```bash
docker exec -it app php artisan key:generate
```

---

#### 6️⃣ Run Migrations

```bash
docker exec -it app php artisan migrate --seed
```

---

#### 7️⃣ Fix Permissions (Important ⚡)

```bash
docker exec -it app chmod -R 775 storage bootstrap/cache
docker exec -it app chown -R www-data:www-data storage bootstrap/cache
```

---

## 🌐 Access the Application

- App: http://localhost
- phpMyAdmin (if included): http://localhost:8080

---

## 🧱 Container Structure

Typical services:

- **app** → Laravel application (PHP)
- **db** → MySQL database
- **nginx** → Web server
- **phpmyadmin** (optional) → Database GUI

---

## 📁 Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
docker/
docker-compose.yml
```

---

## 🔐 Admin Access

Default credentials (if seeded):

```
Email: admin@example.com
Password: password
```

⚠️ Change after first login.

---

## 🧪 Common Commands

### Stop containers

```bash
docker-compose down
```

### Restart containers

```bash
docker-compose restart
```

### Access container shell

```bash
docker exec -it app bash
```

---

## ⚠️ Troubleshooting

### tempnam() warning (Docker issue)

If you see:

```
tempnam(): file created in the system's temporary directory
```

Fix:

```bash
mkdir -p storage/app/temp
chmod -R 775 storage
```

---

### Permission Issues

```bash
chmod -R 777 storage bootstrap/cache
```

_(Use only for development)_

---

## 🤝 Contributing

We welcome contributions to improve this non-profit platform.

Steps:

1. Fork the repository
2. Create a branch (`feature/your-feature`)
3. Commit changes
4. Push & open Pull Request

---

## ❤️ Support the Mission

This project exists to support humanitarian causes.

You can help by:

- Donating
- Volunteering
- Sharing the platform

---

## 📄 License

This project is licensed under the **MIT License**.

---

## 🌟 Acknowledgement

Thanks to all contributors and supporters of **Hilful Fuzul Foundation**.

> “The best of people are those who are most beneficial to others.” 💙
