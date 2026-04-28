# XSS Demo (Simple Project)

This project demonstrates a basic Cross-Site Scripting (XSS) vulnerability and how to fix it.

## Features
- Vulnerable version (no protection)
- Protected version (using htmlspecialchars)
- Simple UI for demonstration

## How to Run
1. Move project to htdocs (XAMPP) or www (Laragon)
2. Open:
   http://localhost/xss-demo/index.php

## Test Payload

<script>alert('XSS')</script>

## Explanation
- index.php → vulnerable
- protected.php → secured using output encoding

## Warning
This project is for educational purposes only.
