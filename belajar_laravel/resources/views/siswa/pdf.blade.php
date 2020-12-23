<html>

<head>
    <title>Laporan Siswa</title>
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
    <h1 align="center">Laporan Siswa</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th width="20">No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>SPP</th>
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
                    {{ $item->nis }}
                </td>
                <td>
                    {{ $item->nama }}
                </td>
                <td>
                    {{ $item->kelas->nama_kelas }} <br> {{ $item->kelas->kompetensi_keahlian }}
                </td>
                <td>
                    {{ $item->spp->tahun }} - {{ $item->spp->nominal }}
                </td>
            </tr>
            <?php $no++;?>
            @endforeach
        </tbody>
    </table>
</body>

</html>