<?php
// register.php

// Include file untuk koneksi ke database
require 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $username = $conn->real_escape_string($username);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Periksa apakah email sudah ada di database
    $check_email_sql = "SELECT * FROM users WHERE email = '$email'";
    $result_email = $conn->query($check_email_sql);

    // Periksa apakah username sudah ada di database
    $check_username_sql = "SELECT * FROM users WHERE username = '$username'";
    $result_username = $conn->query($check_username_sql);

    // Validasi format email
    $valid_domains = ['gmail.com', 'yahoo.com', 'ymail.com'];
    $email_domain = substr(strrchr($email, "@"), 1);

    if ($result_email->num_rows > 0) {
        // Email sudah ada
        echo "<script>
                alert('Error: Email already exists. Please try another email.');
                window.location.href = 'index.php';
                setTimeout(function() {
                    document.getElementById('sign-up-btn').click();
                }, 500);
              </script>";
    } elseif ($result_username->num_rows > 0) {
        // Username sudah ada
        echo "<script>
                alert('Error: Username already exists. Please try another username.');
                window.location.href = 'index.php';
                setTimeout(function() {
                    document.getElementById('sign-up-btn').click();
                }, 500);
              </script>";
    } elseif (!in_array($email_domain, $valid_domains)) {
        // Format email tidak valid
        echo "<script>
                alert('Error: Invalid email domain. Please use a valid email such as @gmail.com, @yahoo.com, or @ymail.com.');
                window.location.href = 'index.php';
                setTimeout(function() {
                    document.getElementById('sign-up-btn').click();
                }, 500);
              </script>";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data pengguna ke database
        $sql = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$email', '$hashed_password', 'user')";

        // Jalankan query dan periksa apakah berhasil
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Registration successful!');
                    window.location.href = 'index.php';
                    setTimeout(function() {
                        document.getElementById('sign-up-btn').click();
                    }, 500);
                  </script>";
        } else {
            echo "<script>
                    alert('Error: " . $conn->error . "');
                    window.location.href = 'index.php';
                    setTimeout(function() {
                        document.getElementById('sign-up-btn').click();
                    }, 500);
                  </script>";
        }
    }
}

// Tutup koneksi ke database
$conn->close();
?>
