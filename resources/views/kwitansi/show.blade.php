<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kwitansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
            color: #000; /* Changed text color to black for better readability */
        }
        .container {
            background-color: #FF7F00;
            padding: 20px;
            border-radius: 5px;
        }
        .logo {
            width: 280px;  
        }
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            .navbar, .footer, .buttons {
                display: none;
            }
            .content {
                width: 100%;
                margin: 0;
                padding: 0;
            }
        }
        .btn-print {
            background-color: #be5808;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn-print:hover {
            background-color: #9e4906;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Detail Kwitansi</h1>
        <div class="card p-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/upe.png') }}" alt="Logo" class="logo">
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>No Kwitansi</th>
                            <td>{{ $kwitansi->no_kwitansi }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $kwitansi->tanggal }}</td>
                        </tr>
                        <tr>
                            <th>Sudah terima dari</th>
                            <td>{{ $kwitansi->sudah_terima_dari }}</td>
                        </tr>
                        <tr>
                            <th>Nama Peminjam</th>
                            <td>{{ $kwitansi->nama_peminjam }}</td>
                        </tr>
                        <tr>
                            <th>Untuk Pembayaran</th>
                            <td>{{ $kwitansi->untuk_pembayaran }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Uang</th>
                            <td>{{ number_format($kwitansi->jumlah_uang, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
        <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary">Back</a>
            <button id="printToPdf" class="btn btn-primary">Print</button>
        </div>
    </div>

    <script>
    document.getElementById('printToPdf').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const kwitansiNo = '{{ $kwitansi->no_kwitansi }}';
        const amountInWords = @json(terbilang($kwitansi->jumlah_uang));

        // Add logo image at top left corner
        const logoImg = new Image();
        logoImg.src = '{{ asset("images/upe.png") }}';
        doc.addImage(logoImg, 'PNG', 20, 10, 40, 40);

        // Calculate center X position for texts
        const pageWidth = doc.internal.pageSize.width;
        const textStartX = 70; // Adjusted X position for text

        // Texts aligned next to the logo
        doc.setFontSize(12);
        doc.text("KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI", textStartX, 20);
        doc.text("UNIVERSITAS PENDIDIKAN INDONESIA", textStartX, 30);
        doc.text("FAKULTAS PENDIDIKAN EKONOMI DAN BISNIS", textStartX, 40);
        doc.text("Jalan Dr. Setiabudhi No 229 Bandung 40154", textStartX, 50);
        doc.text("Telp. 022 2001169, 2009210, Fax. 022 2001261", textStartX, 60);
        doc.text("http://fpeb.upi.edu, Surel: fpeb@upi.edu", textStartX, 70);

        // Adding horizontal line
        doc.line(20, 83, pageWidth - 20, 83); // Adjusted Y coordinate

        // Text "BUKTI SAH PEMBAYARAN"
        doc.setFontSize(20); // Set font size to 20
        doc.text("BUKTI SAH PEMBAYARAN", textStartX, 95);

        // Adjust startY position for autoTable to avoid overlapping with the logo
        const startY = 110; // Adjusted startY position

        doc.autoTable({
            startY: startY,
            body: [
                ['No', '{{ $kwitansi->no_kwitansi }}'],
                ['Tanggal', '{{ $kwitansi->tanggal }}'],
                ['Sudah terima dari', '{{ $kwitansi->sudah_terima_dari }}'],
                ['Nama Peminjam', '{{ $kwitansi->nama_peminjam }}'],
                ['Untuk Pembayaran', '{{ $kwitansi->untuk_pembayaran }}'],
                ['Jumlah Uang', amountInWords]
            ],
        });

        doc.save(`detail_kwitansi_{{ $kwitansi->no_kwitansi }}.pdf`);
    });
</script>

</body>
</html>
