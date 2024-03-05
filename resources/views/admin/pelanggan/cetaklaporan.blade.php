<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Data Penjualan</title>
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
                    <th>ID Member</th>
                    <th>Nama Member</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $p )
                <tr>
                    <td>{{  $p->id_pelanggan  }}</td>
                    <td>{{  $p->nama_pelanggan  }}</td>
                    <td>{{  $p->jenis_kelamin  }}</td>
                    <td>{{  $p->alamat }}</td>
                    <td>{{  $p->no_telp }}</td>
                </tr>
                    
                @endforeach
            </tbody>  
        </table>
    </body>
</html>