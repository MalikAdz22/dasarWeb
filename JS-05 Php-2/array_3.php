<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multidimensional Array</title>
        <style>
            table {
                width: 60%;
                margin: 20px auto;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }
            th, td {
                padding: 12px;
                border: 1px solid #ddd;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
                font-weight: bold;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align: center;">Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("Avengers: Infinity War", 2018, 8.7),
                    array("The Avengers", 2012, 8.1),
                    array("Guardians of the Galaxy", 2014, 8.1),
                    array("Iron Man", 2008, 7.9)
                );

                foreach ($movie as $film) {
                    echo "<tr>";
                    echo "<td>{$film[0]}</td>";
                    echo "<td>{$film[1]}</td>";
                    echo "<td>{$film[2]}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
