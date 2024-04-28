# EduBooking

![Laravel](https://img.shields.io/badge/Laravel-v8-red)
![PHP](https://img.shields.io/badge/PHP-%5E7.4-blue)
![HTML5](https://img.shields.io/badge/HTML-Blade-orange)
![CSS3](https://img.shields.io/badge/CSS3-Styled-blue)
![SQLite](https://img.shields.io/badge/SQLite-v3-lightgrey)

EduBooking is an innovative online appointment scheduling platform designed to facilitate seamless interactions between students and teachers. 
This tool allows students to book appointments with their educators effortlessly, enhancing the educational experience by fostering easier and more direct communication.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Getting Started](#getting-started)
- [Contributors](#contributors)
- [Timeline](#timeline)

## Project Overview

EduBooking simplifies the process of scheduling meetings by providing a user-friendly interface where students can find available timeslots and book appointments with teachers. 
The platform aims to minimize administrative overhead and maximize interaction time between students and educators.

## Features

- **User Authentication:** Secure login and registration system for teachers and students.
- **Appointment Booking:** Students can choose their teacher, view their availability and book slots accordingly.
- **Dashboard:** Customized dashboards for students and teachers to manage appointments.
- **Email notification:** An email is automaticaly sent to remind you of the date and time of your appointment

## Technology Stack

- **Back-end Framework:** [Laravel](https://laravel.com/)
- **Programming Languages:** PHP, HTML (Blade templates), CSS
- **Database:** SQLite

## Getting Started

To get a local copy up and running, follow these simple steps:

```bash
git clone https://github.com/your-username/eduBooking.git
cd eduBooking
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Contributors

- **Etienne Lemée** - Project Manager and creator, Database Management, Fullstack development, project organisation
- **Lenny Olax-Bargain** - Account creation and login
- **Anas Rayk** - HTML development

## Timeline

- **Project Start Date:** April 16, 2024
- **Expected Completion:** April 30, 2024
- **Total Sessions:** 7
