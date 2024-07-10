<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Tambahkan CSS di sini */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
            padding: 0; /* Hapus padding agar tidak ada jarak tambahan */
        }

        .login-container {
            background-color: #FFE9D0;
            border: 2px solid #d35400;
            border-radius: 20px;
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: 0; /* Hapus margin agar tidak ada jarak tambahan */
        }

        .logo {
            background-color: #d35400; /* Warna latar belakang */
            border: 1px solid #d35400; /* Border oranye */
            border-radius: 15px; /* Sudut melengkung */
            padding: 10px; /* Atur padding agar menyatu dengan gambar */
            margin-left: auto; /* Center gambar secara horizontal */
            margin-right: auto; /* Center gambar secara horizontal */
            margin-bottom: 100px; /* Beri jarak bawah antara gambar dan form */
        }

        .logo img {
            width: 200px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
        }

        .form-element {
            margin-bottom: 15px;
        }

        .form-element .form-label {
            text-align: left; /* Ubah label menjadi kiri */
            padding-left: 20px; /* Beri jarak kiri */
            display: block; /* Pastikan label berada pada baris yang terpisah */
            margin-bottom: 5px; /* Beri jarak ke bawah */
        }

        .form-element input {
            width: 80%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .form-element input::placeholder {
            color: #ddd;
        }

        .form-submit button {
            width: 85%;
            padding: 10px;
            background-color: #d35400; /* Oranye tua */
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .form-submit button:hover {
            background-color: #e67e22; /* Warna oranye sedikit lebih terang */
        }

        .canvas-back {
            display: none; /* Sembunyikan canvas jika tidak diperlukan */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('images/upiw.png') }}" alt="UPI FPEB Logo">
        </div>
        <form id="form-login" method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-element form-stack">
                <label for="username-login" class="form-label">Username</label>
                <input id="username-login" type="text" name="username" placeholder="Enter Your Username">
            </div>
            <div class="form-element form-stack">
                <label for="password-login" class="form-label">Password</label>
                <input id="password-login" type="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="form-element form-submit">
                <button id="logIn" class="login" type="submit" name="login">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>
