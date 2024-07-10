<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kwitansi FPEB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-header {
            background-color: #FF7F00;
            color: white;
        }
        .table-row:nth-child(even) {
            background-color: #FFD700;
        }
        .table-row:nth-child(odd) {
            background-color: #FFA500;
        }
        .action-icon svg {
            width: 20px;
            height: 20px;
            cursor: pointer;
            fill: white;
        }
        /* Custom styles for the logo and navbar */
        .logo {
            width: 150px;
            margin-bottom: 10px;
        }
        .navbar {
            background-color: #FFA500; /* Dark color for navbar */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white; /* Text color for navbar links */
        }
        .navbar-nav .nav-link:hover {
            color: #FFA500; /* Hover color for navbar links */
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
                        <a class="nav-link" href="{{ url('kwitansi.create') }}">Kwitansi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-4">
        <h1 class="text-center mb-4">Edit Kwitansi FPEB</h1>
        <form method="POST" action="{{ route('kwitansi.update', $kwitansi->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kwitansi->tanggal }}">
            </div>
            <div class="form-group">
                <label for="sudah_terima_dari">Sudah terima dari</label>
                <input type="text" class="form-control" id="sudah_terima_dari" name="sudah_terima_dari" value="{{ $kwitansi->sudah_terima_dari }}">
            </div>
            <div class="form-group">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="{{ $kwitansi->nama_peminjam }}">
            </div>
            <div class="form-group">
                <label for="untuk_pembayaran">Untuk Pembayaran</label>
                <input type="text" class="form-control" id="untuk_pembayaran" name="untuk_pembayaran" value="{{ $kwitansi->untuk_pembayaran }}">
            </div>
            <div class="form-group">
                <label for="jumlah_uang">Jumlah Uang</label>
                <input type="text" class="form-control" id="jumlah_uang" name="jumlah_uang" value="{{ $kwitansi->jumlah_uang }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
