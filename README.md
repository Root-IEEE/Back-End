# Back-End for IEEE Educational Platform

This repository contains the back-end logic for the IEEE Educational Platform, a website and app designed to provide educational content to students, allowing them to watch videos and solve exams uploaded by teachers.

## Table of Contents

- [Technologies Used](#technologies-used)
- [Project Overview](#project-overview)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Technologies Used

- Laravel 9
- Laravel Sanctum for authentication
- Spatie Package for handling roles and permissions
- Filament Package for dashboard functionality

## Project Overview

The IEEE Educational Platform is an educational website and app designed to facilitate online learning. It offers the following key features:

- **Authentication**: Utilizes Laravel Sanctum for secure authentication.
- **Roles and Permissions**: Implements Spatie Package to manage five different roles (guest, student, teacher assistant, teacher, admin).
- **Dashboard**: Utilizes the Filament Package for administrative dashboard functionality.
- **APIs and Logic**: Provides APIs and back-end logic to support the educational platform's core functionality.

## Project Structure

The repository is structured as follows:

- `app/`: Contains the Laravel application logic.
- `config/`: Configuration files for Laravel and related packages.
- `database/`: Migration and seed files for the database.
- `routes/`: Route definitions for the API endpoints.
- `resources/`: Contains views, assets, and front-end related files (if applicable).
- `tests/`: Unit and feature tests.

## Installation

To set up the project locally, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/iEEE/Back-End.git

2. Install PHP dependencies:

   ```bash
   composer install

3. Configure your environment variables by creating a `.env` file. You can use `.env.example` as a template.

4. Run database migrations:

    ```bash
   php artisan migrate


5. Start the development server:

    ```bash
   php artisan serve


## Configuration

Ensure you configure the necessary environment variables in your `.env` file. Key configurations to consider include:

- **Database Connection Settings**
- **API Authentication** (e.g., Sanctum configuration)
- **Spatie Package Configuration** for roles and permissions

## Usage

To use this project, follow these guidelines:

- **API Endpoints**: Describe the available API endpoints and their functionalities.
- **Role Management**: Explain how to create, manage, and assign roles using Spatie Package.
- **Additional Information**: Provide any other relevant information for users or developers who want to interact with your project.

## Contributing

If you wish to contribute to this project, please follow the contribution guidelines outlined in [CONTRIBUTING.md](CONTRIBUTING.md).

## License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for more details.

```bash
You can now copy and paste this continuation into your README.md file to complete your project's README. Feel free to add more details and customize it according to your project's specific needs.

