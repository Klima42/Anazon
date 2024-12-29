About
This project is a Symfony-based application that replicates some core features of an e-commerce platform, like Amazon. It is designed for learning and exploration of Symfony capabilities.

Features
User registration and authentication
Product catalog browsing
Shopping cart functionality
Order management
Basic administrative features for managing products and orders
Installation
Prerequisites
PHP version as specified in .php-version file
Composer for dependency management
Symfony CLI (optional, for development convenience)
Steps
Clone this repository:

bash
Copier le code
git clone https://github.com/your-username/your-repository.git
Navigate to the project directory:

bash
Copier le code
cd your-repository
Install dependencies:

bash
Copier le code
composer install
Set up the environment variables by duplicating .env file:

bash
Copier le code
cp .env .env.local
Update .env.local with your database and application configuration.

Run database migrations:

bash
Copier le code
php bin/console doctrine:migrations:migrate
Start the Symfony server:

bash
Copier le code
symfony server:start
Usage
Once the application is running, you can access it at http://localhost:8000 (or the URL provided by the Symfony server).

Development Commands
Run tests:

bash
Copier le code
php bin/phpunit
Clear cache:

bash
Copier le code
php bin/console cache:clear
Technologies Used
Symfony Framework (PHP)
Twig (Templating engine)
Doctrine ORM (Database management)
Composer (Dependency management)
