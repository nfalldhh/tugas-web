<html>

<head>
    <title>Laporan Pembayaran</title>
</head>
<style>
@page {
    margin: 10px;
}

body {
    margin: 10px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

table tr th {
    border: 1px solid black;
    background: #c5c5c5;
    padding: 5px;
}

table tr td {
    border: 1px solid black;
    padding: 5px;
}
</style>

<body>
    <h1 align="center">Laporan Pembayaran</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th width="20">No</th>
                <th>Tgl Bayar</th>
                <th>Siswa</th>
                <th>SPP</th>
                <th>Jumlah</th>
                <th>Petugas</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
            @foreach($data as $item)
            <tr>
                <td align="center">
                    {{ $no }}
                </td>
                <td>
                    {{ $item->tgl_bayar }}
                </td>
                <td>
                    {{ $item->nisn }}<br>{{ $item->siswa->nama }}
                </td>
                <td>
                    {{ $item->spp->tahun }}<br>{{ $item->spp->nominal }}
                </td>
                <td>
                    {{ $item->jumlah_bayar }}
                </td>
                <td>
                    {{ $item->user->name }}
                </td>
            </tr>
            <?php $no++;?>
            @endforeach
        </tbody>
    </table>
</body>

</html>