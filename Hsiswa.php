<?php

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo = $_POST['indo'];
    $ing = $_POST['ing'];
    $mtk = $_POST['mtk'];
    $lab = $_POST['lab'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Document</title>


</head>

<body>
    <div class="container">
        <marquee class="container" bgcolor="White" width="9365">
            <h1>HASIL PENILAYAN SISWA
        </marquee>
    </div>
    <div class="container">
        <table class="table table-striped" border="1">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Siswa </th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Bahasa Indonesia</th>
                    <th scope="col">Bahasa Inggris</th>
                    <th scope="col">Matematika</th>
                    <th scope="col">Produktif</th>
                    <th scope="col">Total Nilai</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>

            <tbody>



                <?php

                for ($a = 0; $a < count($nis); $a++) {
                    $total = $indo[$a] + $ing[$a] + $mtk[$a] + $lab[$a];
                    $rata = $total / 4;

                    echo "<tr>";
                    echo "<td>$nis[$a]<?td>";
                    echo "<td>$nama[$a]<?td>";
                    echo "<td>$kelas[$a]<?td>";
                    echo "<td align='center'>$indo[$a]<?td>";
                    echo "<td align='center'>$ing[$a]<?td>";
                    echo "<td align='center'>$mtk[$a]<?td>";
                    echo "<td align='center'>$lab[$a]<?td>";
                    echo "<td align='center'>$total<?td>";
                    echo "<td align='center'>$rata<?td>";
                    if ($rata < 75) {
                        echo "<td  style='color: red;'> <b>Tidak Lulus</b></td>";
                    } else if ($rata >= 75) {
                        echo "<td  style='color: green;'> <b>Lulus</b> </td>";
                    }
                    echo "</table";
                    echo "</tr>";
                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>