# 📦 Laraberg Demo

This is a ready-to-use Laravel demo project that integrates the [Laraberg](https://github.com/VanOns/laraberg) WYSIWYG editor.

> ✅ Everything is already set up for you — just clone and run it!

---

## 📌 About

[Laraberg](https://github.com/VanOns/laraberg) is a Gutenberg-based editor for Laravel, created by [VanOns](https://github.com/VanOns).  
However, the original repo doesn’t include a full working demo or integration guide.

This project provides a **fully functional Laravel installation with Laraberg pre-installed and configured**, so you can:

- See Laraberg in action
- Test how to integrate it in your projects
- Start building on top of it right away

\
🧩 Features Included
Laravel 12.0

Laraberg fully set up

Example page with editor initialized

Basic usage and save functionality

\
📚 Reference
This project is based on the original open-source package:
🔗 github.com/VanOns/laraberg

Thanks to the creators of Laraberg for their great work!

🛠 Contributing
Feel free to fork this repo or submit issues/pull requests if you find ways to improve the demo.


🧑‍💻 Author
Created with ❤️ FarhadMZ

---

## 🚀 Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/your-username/laraberg-demo.git

cd laraberg-demo

# 2. Install dependencies
composer install

# 3. Set up .env
cp .env.example .env
php artisan key:generate

# 4. Run migrations
php artisan migrate

# 5. Serve the project
php artisan serve
