<!DOCTYPE html>
<html>

<head>  
    <title>Struk</title>
    <style>
      @page{
        margin:0px;
      }
        body {
            font-family: sans-serif;
            font-size: 14px;
        }

        .receipt {
            width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .receipt h1 {
            text-align: center;
            margin-top: 0;
        }

        .receipt table {
            width: 90%;
            border-collapse: collapse;
        }

        .receipt th,
        .receipt td {
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }

        .receipt th {
            text-align: left;
        }

        .receipt .total {
            font-weight: bold;
            font-size: 16px;
        }

        .receipt .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <h1>Digi Sayogi</h1>
        <p class="order-info">
            Jl Wado-Kirisik No 23 Ds Tarikolot Kec Jatinunggal<br>
           E-mail : sayogielektronik@gmail.com No Telp : 0876-9276-8265
        </p>
        <table>
            <tr>
                <td>ID Penjualan</td>
                <td>: {{ $penjualan->id_penjualan }}</td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td>: {{ $penjualan->nama_pelanggan }}</td>
            </tr>
            <tr>
                <td>Nama Kasir</td>
                <td>: {{ $penjualan->nama_kasir }}</td>
            </tr>
            <tr>
                <td>Tanggal Penjualan</td>
                <td>: {{ $penjualan->tanggal_penjualan }}</td>
            </tr>
        </table>
        <p>============================================</p>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA BARANG</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailpenjualan as $dp)
                    <tr>
                        <td align="center">{{ $loop->iteration }}</td>
                        <td class="text-truncate">{{ $dp->nama_produk }}</td>
                        <td align="center">{{ $dp->jumlah_produk }}</td>
                        <td class="text-truncate">{{ rupiah($dp->subtotal) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>============================================</p>
        <table>
            <thead>
                <tr class="total">
                    <th colspan="2"></th>
                    <th colspan="2">Total</th>
                    <th>: {{ rupiah($penjualan->total_harga) }}</th>
                </tr>
                <tr class="total">
                    <th colspan="2"></th>
                    <th colspan="2">Bayar</th>
                    <th>: {{ rupiah($penjualan->bayar) }}</th>
                </tr>
                <tr class="total">
                    <th colspan="2"></th>
                    <th colspan="2">Kembali</th>
                    <th>: {{ rupiah($penjualan->kembalian) }}</th>
                </tr>
            </thead>
        </table>
        <div class="footer">^^ Terima Kasih Sudah Berbelanja ^^</div>
    </div>
</body>

</html>
