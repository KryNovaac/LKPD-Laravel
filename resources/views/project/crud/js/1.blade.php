<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        #z {
        }    </style>
</head>
<x-header></x-header>
<body>
    <h1>Data Siswa</h1>
    <table>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">NIS</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Rayon</th>
            <th rowspan="2">JK</th>
            <th colspan="2">Matrikulasi</th>
            <th rowspan="2">Tepat Waktu</th>
        </tr>
        <tr>
            <th>Speed Test</th>
            <th>LKPD php</th>
        </tr>
        <tr>
            <td>1</td>
            <td>12410164</td>
            <td>Aliffio Rizki Ananda</td>
            <td>Cib 1</td>
            <td>P</td>
            <td>80p</td>
            <td>90</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">12410164</td>
            <td rowspan="2">Aliffio Rizki Ananda</td>
            <td rowspan="2">Cib 1</td>
            <td rowspan="2">P</td>
            <td rowspan="1">80</td>
            <td>90</td>
            <td rowspan="2"><input type="checkbox"></td>
        </tr>
        <tr><td colspan="2">perlu perbaikan</td></tr>
        <tr>
            <td rowspan="2">3</td>
            <td rowspan="2">12410164</td>
            <td rowspan="2">Aliffio Rizki Ananda</td>
            <td rowspan="2">Cib 1</td>
            <td rowspan="2">P</td>
            <td rowspan="1">80</td>
            <td>90</td>
            <td rowspan="2"><input type="checkbox"></td>
        </tr>
        <tr><td colspan="2">perlu perbaikan</td></tr>
        <tr>
            <td>4</td>
            <td>12410164</td>
            <td>Aliffio Rizki Ananda</td>
            <td>Cib 1</td>
            <td>P</td>
            <td>80</td>
            <td>90</td>
            <td><input type="checkbox"></td>
        </tr>
        </tr>
        <tr>
            <td>5</td>
            <td>12410164</td>
            <td>Aliffio Rizki Ananda</td>
            <td>Cib 1</td>
            <td>P</td>
            <td>80p</td>
            <td>90</td>
            <td><input type="checkbox"></td>
        </tr>
        </tr>
        <tr>
            <td>6</td>
            <td>12410164</td>
            <td>Aliffio Rizki Ananda</td>
            <td>Cib 1</td>
            <td>P</td>
            <td>80p</td>
            <td>90</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td id="z" colspan="5">Rata2</td>
            <td>66</td>
            <td>66</td>
            <td></td>
        </tr>
    </table>
</body>
</html>
