<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Kwitansi FPEB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-header {
            background-color: #FF7F00;
            color: white;
        }
        .table-row:nth-child(even) {
            background-color: #fff;
        }
        .table-row:nth-child(odd) {
            background-color: #FFA500;
        }
        .action-icon svg {
            width: 20px;
            height: 20px;
            cursor: pointer;
            fill: black;
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
                        <a class="nav-link" href="{{ route('kwitansi.create') }}">Kwitansi</a>
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
        <h1 class="text-center mb-4">Rekap Kwitansi FPEB</h1>
        <table class="table table-bordered">
            <thead class="table-header">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Sudah terima dari</th>
                    <th>Nama Peminjam</th>
                    <th>Untuk Pembayaran</th>
                    <th>Jumlah Uang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kwitansis as $index => $kwitansi)
                <tr class="table-row">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kwitansi->tanggal }}</td>
                    <td>{{ $kwitansi->sudah_terima_dari }}</td>
                    <td>{{ $kwitansi->nama_peminjam }}</td>
                    <td>{{ $kwitansi->untuk_pembayaran }}</td>
                    <td>{{ number_format($kwitansi->jumlah_uang, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('kwitansi.show', $kwitansi->id) }}" class="action-icon">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.985 17.031c-1.479 1.238-3.384 1.985-5.461 1.985-4.697 0-8.509-3.812-8.509-8.508s3.812-8.508 8.509-8.508c4.695 0 8.508 3.812 8.508 8.508 0 2.078-.747 3.984-1.985 5.461l4.749 4.75c.146.146.219.338.219.531 0 .587-.537.75-.75.75-.192 0-.384-.073-.531-.22zm-5.461-13.53c-3.868 0-7.007 3.14-7.007 7.007s3.139 7.007 7.007 7.007c3.866 0 7.007-3.14 7.007-7.007s-3.141-7.007-7.007-7.007zm1.991 6.999c0-.552.448-1 1-1s1 .448 1 1-.448 1-1 1-1-.448-1-1zm-3 0c0-.552.448-1 1-1s1 .448 1 1-.448 1-1 1-1-.448-1-1zm-3 0c0-.552.448-1 1-1s1 .448 1 1-.448 1-1 1-1-.448-1-1z" fill-rule="nonzero"/></svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $kwitansis->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
