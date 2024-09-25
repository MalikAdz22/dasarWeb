<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Informasi</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $Dosen = [
                    'Nama' => 'Elok Nur Hamdana',
                    'Domisili' => 'Malang',
                    'Jenis Kelamin' => 'Perempuan'
                ];

                foreach ($Dosen as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
