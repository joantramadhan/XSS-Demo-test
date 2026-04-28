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

## VIEW
> <img width="873" height="477" alt="image" src="https://github.com/user-attachments/assets/f0675380-f69e-4180-a0d6-b6e26227929b" />

> <img width="886" height="517" alt="image" src="https://github.com/user-attachments/assets/88ee2278-b859-48d4-872c-949730977a77" />

