<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Data Produk</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            .page-break {
                page-break-after: always;
            }
            .title {
                text-align: center; 
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="title">
            <h1>Laporan Data Penjualan</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Satuan Barang</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <body>
                @foreach ($produk as $u )
                <tr>
                    <td>{{ $u->id  }}</td>
                    <td>{{ $u->nama_produk }}</td>
                    <td>{{ rupiah($u->harga)  }}</td>
                    <td>{{ $u->satuan  }}</td>
                    <td>{{ $u->stok  }}</td>
                    </tr>  
                @endforeach
            </body>
        </table>
    </body>
</html>