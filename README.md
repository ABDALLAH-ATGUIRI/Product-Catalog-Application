# Product Catalog

## Overview

Welcome to the Product Catalog! This repository hosts a simple and efficient system for managing and showcasing products. The project provides both a command-line interface (CLI) and a web interface, allowing users to interact seamlessly with product categories and listings.

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
4. [Usage](#usage)
    - [Command Line Interface (CLI)](#command-line-interface-cli)
    - [Web Interface](#web-interface)
5. [Testing](#testing)
6. [Folder Structure](#folder-structure)
7. [Code Quality](#code-quality)
8. [Contributing](#contributing)
9. [License](#license)

## Features

-   **Command Line Interface (CLI):**

    -   Create and delete product categories.
    -   Create and delete products.

-   **Web Interface:**
    -   User-friendly web interface for creating and managing products.
    -   Paginated product listing with sorting (by name or price) and category filtering.

## Technologies Used

-   **Backend:**

    -   Laravel (PHP)
    -   MySQL

-   **Frontend:**
    -   VueJs

## Getting Started

### Prerequisites

-   [PHP](https://www.php.net/) installed.
-   [Composer](https://getcomposer.org/) for PHP dependency management.
-   [Node.js](https://nodejs.org/) for JavaScript runtime.
-   [Vue.js](https://vuejs.org/) globally installed.

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ABDALLAH-ATGUIRI/Product-Catalog-Application.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd Product-Catalog-Application
    ```

3. **Install PHP dependencies:**

    ```bash
    cd composer install
    ```

4. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

5. **Configure your database settings in the .env file.:**
6. **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

7. **Compile frontend assets:**

    ```bash
    npm run dev
    ```

## Usage

### Command Line Interface (CLI)

**Use the following commands to interact with the CLI:**

```bash
# Create a category
php artisan category:create

# Delete a category

php artisan category:delete

# Create a product

php artisan product:create

# Delete a product

php artisan product:delete
```

### Web Interface

1.  **Start the development server:**

```bash
    php artisan serve
```

1.  **Open your browser and navigate to http://localhost:8000.**
2.  **Use the web interface to create and manage products.**
3.  **php artisan test.**

### Folder Structure

-   **app/Actions:** Contains folder actions for business logic
-   **app/Http/Controllers:** Houses controllers for web and CLI interactions.
-   **app/Models: :** Defines Eloquent models for products and categories.

### Code Quality

- **Adhere to PSR coding standards.**
- **Follow DRY, KISS, YAGNI, and SOLID principles.**
- **Commit incrementally for a clean commit history.**
