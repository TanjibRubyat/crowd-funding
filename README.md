# Crowd Funding Platform

A backend API for a crowdfunding platform built with Laravel — campaign management, contributions, and progress tracking.

## What it does

- Campaign creators can set up a fundraising goal with a deadline
- Supporters can make contributions to campaigns
- Progress tracking toward the funding goal
- RESTful API endpoints for all core operations

## Tech stack

| Layer | Technology |
|-------|-----------|
| Backend | Laravel (PHP) |
| Database | MySQL |
| API | RESTful |

## Getting started

```bash
git clone https://github.com/TanjibRubyat/crowd-funding.git
cd crowd-funding

composer install

cp .env.example .env

php artisan key:generate
php artisan migrate

php artisan serve
```

## Status

Backend API complete. Frontend not included — API responses are designed to be consumed by any frontend framework.
