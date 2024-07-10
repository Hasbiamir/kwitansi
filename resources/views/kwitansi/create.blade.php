<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Kwitansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .form-header h1 {
            color: #000;
        }
        .form-header {
            background-color: #FF7F00;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 20px 20px 0 0;
        }
        .form-container {
            border: 2px solid #FF7F00;
            border-radius: 0 0 20px 20px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #FF7F00;
            border-color: #FF7F00;
        }
        .logo {
            width: 150px;
            margin-right: 15px;
        }
        .navbar {
            background-color: #FFA500;
            height: 70px;
        }
        .navbar-brand {
            margin-right: auto;
            margin-bottom: 10px;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white;
            margin-bottom: 50px;
        }
        .navbar-nav .nav-link:hover {
            color: #FFA500;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="https://www.upi.edu/">
                <img src="{{ asset('images/upiw.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kwitansi.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kwitansi.create') }}">Kwitansi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Header Form -->
        <div class="form-header">
            <h1>Input Data Kwitansi</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('kwitansi.store') }}" method="POST" class="form-container">
            @csrf
            <div class="form-group">
                <label for="no_kwitansi">No Kwitansi</label>
                <input type="text" name="no_kwitansi" id="no_kwitansi" class="form-control" value="FPEB UPI 2023 - KW" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Kwitansi</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sudah_terima_dari">Sudah terima dari</label>
                <input type="text" name="sudah_terima_dari" id="sudah_terima_dari" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="untuk_pembayaran">Untuk Pembayaran</label>
                <input type="text" name="untuk_pembayaran" id="untuk_pembayaran" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_uang">Jumlah Uang</label>
                <input type="number" name="jumlah_uang" id="jumlah_uang" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
