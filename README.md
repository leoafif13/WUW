<h1 align="center">
  <img src="public/img/Logo WUW.png" alt="Logo" height="40" style="vertical-align: middle; margin-right: 10px;">
  <strong>WUW - WearYouWant 👗🎓</strong>
</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-red?logo=laravel&style=for-the-badge" alt="Laravel" />
  <img src="https://img.shields.io/badge/Livewire-3-blueviolet?logo=livewire&style=for-the-badge" alt="Livewire" />
  <img src="https://img.shields.io/badge/TailwindCSS-3-38bdf8?logo=tailwindcss&style=for-the-badge" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Status-In_Development-brightgreen?style=for-the-badge" alt="Status" />
</p>

---

A modern, stylish web application for renting wedding and graduation outfits. This project is our final submission for **Project-Based Learning**.

<p align="center">
  <!-- You can replace this image with your own logo -->
  <img src="public/img/WUW.png" alt="WUW Logo">
</p>

<p align="center">A web-based application for wedding and graduation outfit rentals.</p>


---

## 👥 Project Contributors – WearYouWant (WUW)

| Name                      | NIM         | Role                                             | GitHub Username     |
|---------------------------|-------------|--------------------------------------------------|---------------------|
| Leo Afif Eka Permana      | 3312401041  | Lead Frontend Developer & Project Documentation  | [`@leoafif13`](https://github.com/leoafif13)     |
| Muhammad Faiq             | 3312401031  | Backend Developer & Database Integration         | [`@Mufaaaa`](https://github.com/Mufaaaa)         |
| Ananda Khusnul Hotimah    | 3312401044  | UI/UX Designer & Media Asset Manager             | [`@dioz44`](https://github.com/dioz44)           |
| Muhammad Deza Awdino      | 3312401050  | System Tester, Deployment, & Test Documentation  | [`@dinoslebew`](https://github.com/dinoslebew)   |

> 📝 *Each team member contributed significantly to the success of the WUW project.*
---

## 📦 About the Project

**WUW - WearYouWant** is a web-based application that makes it easy for users to rent outfits for wedding and graduation events. With a user-friendly interface and a seamless payment process, WUW aims to be a modern digital solution for formal wear rentals.

---

## 🌟 Key Features

Here are the main features offered by **WUW - WearYouWant**:

### 🔎 Instantly Search and Rent Outfits
Users can search for outfits by name or category, view detailed product information, and instantly add them to the rental cart.

### 🛒 Shopping Cart & Seamless Checkout
A cart system that stores selected rental items. Fast and efficient checkout with a complete summary of the order and total cost.

### 💸 Digital Payment Integration via Midtrans
Integrated with the **Midtrans** payment gateway, users can make real-time payments using various methods such as e-wallets, bank transfers, and credit cards.

### 📊 Powerful Admin Panel with Filament
Administrators can manage products, users, orders, and rental reports using a modern and intuitive admin panel powered by **Filament**.

### 📅 Rental History 
Users can view their rental history 


---

## 🛠️ Tech Stack

We used modern and reliable technologies to build this application:

- **Backend:** Laravel 12, MySQL  
- **Frontend:** Tailwind CSS,  Blade  
- **Full-stack Tooling:** Livewire  
- **Admin Panel:** Filament  
- **Payment Gateway:** Midtrans  

---

## 🚀 Getting Started

### ✅ Prerequisites

Make sure you have the following installed:

- PHP 8.3+
- Composer
- Node.js & NPM
- MySQL

### 💻 Installation (Step-by-Step)

1. **Clone the repository and navigate to the project directory**
    ```bash
    git clone https://github.com/leoafif13/WUW.git
    cd WUW
    ```

2. **Install backend and frontend dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Copy and configure the environment file**
    ```bash
    cp .env.example .env
    # Edit the .env file:
    # - DB_DATABASE=your_database
    # - DB_USERNAME=your_username
    # - DB_PASSWORD=your_password
    # - MIDTRANS_SERVER_KEY=your_midtrans_server_key
    # - MIDTRANS_CLIENT_KEY=your_midtrans_client_key
    ```

4. **Generate application key and migrate the database**
    ```bash
    php artisan key:generate
    php artisan migrate --seed
    ```

5. **Build frontend assets and run the development server**
    ```bash
    npm run dev
    php artisan serve
    ```

🔗 Access the application via your browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---
### 🎥 Video Presentation ATS

Watch the following video to see our **Wear You Want (WUW)** ATS Presentation:

📺 **(https://youtu.be/VqBooRHIx0A?si=hnS5rpKo5Oj7vz5v)**

---

### 🎥 Video Presentation AAS

Watch the following video to see our **Wear You Want (WUW)** AAS Presentation:

📺 **(https://youtu.be/VqBooRHIx0A?si=hnS5rpKo5Oj7vz5v)**

---

### 🎥 Video Demonstration

Watch the following video to see how our **WearYouWant (WUW)** application works in action:

📺 **(https://youtu.be/VqBooRHIx0A?si=hnS5rpKo5Oj7vz5v)**

---

# 📖 User Guide – WUW (Wear You Want) Web Application

This guide explains each page of the **WearYouWant (WUW)** web-based rental application, from account registration to profile management.

---

## 1. 📝 Register Page

Create an account by filling in your full name, email address, password, and confirming your password.


> After a successful registration, users will be redirected to the **Login** page.

---

## 2. 🔐 Login Page

Log in using your registered **email** and **password**.

> If the entered credentials are correct, the user will be redirected to the **Home** page.

---

## 3. 🏠 Home Page

On the **Home** page, users are welcomed with the main interface of the WUW application. This page is designed to give a strong first impression.

> To browse available products, click the **"Products"** link in the navigation bar.

---

## 4. 🔍 Product Search Page

The **Product Search** page is designed to help users easily find outfits that suit their needs by filtering through **categories**, **types**, or **sizes**.


> To see more details about a product, click the **"Product Details"** button.

---

## 5. 📄 Product Detail Page

This page provides detailed information about a selected outfit, helping users make informed decisions before renting.


> If the user decides to rent, they can choose the quantity and click **"Add to Cart"**.

---

## 6. 🛒 Shopping Cart Page

The **Cart** page shows a list of selected products the user intends to rent before proceeding to checkout.


> Once confirmed, the user can click **"Checkout"** to continue to the next step.

---

## 7. 💳 Checkout Page

The **Checkout** page is the final step before completing the rental. Here, users can review their orders, choose a **shipping method**, select a **payment method**, and see the **total cost**.


> After clicking **"Place Order"**, a payment popup (e.g., from Midtrans) will appear for transaction completion.

---

## 8. 📚 Rental History Page

The **Rental History** page displays all previous rentals made by the user. This allows users to review past orders or repeat a previous rental.


> To leave a review on a past rental, click the **"Rate"** button.

---

## 9. 🌟 Product Rating Page

The **Product Rating** page allows users to leave feedback or reviews for the items they rented. This helps other users and supports service improvement.


---

## 10. 👤 Profile Page

To view personal information, go to the home page and click **"My Profile"**. This page shows your account and personal data.


---

## 11. ✏️ Edit Profile Page

Users can update their personal information on the **Edit Profile** page. Keeping data up to date ensures smooth shipping and verification.


> After making changes, click **"Update Profile"**.

---

## 12. 🔑 Change Password Page

To change your password, return to the home page, go to **"My Profile"**, then click **"Change Password"**.

This page allows users to securely update their passwords to protect their accounts.


---

🧡 Thank you for using **WearYouWant (WUW)** — your trusted outfit rental platform.

