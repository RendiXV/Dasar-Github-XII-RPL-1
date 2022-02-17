<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br><br>
    <center>

    </center>
    <form action="" method="POST">

        <div class=" card container">
            <tr>
                <h3 align="center">Data Nilai Ujian Kelas XI RPL</h3>
            </tr>
            <div class="form-group row">
                <label for="inputnumber3" class="col-sm-2 col-form-label">Jumlah Siswa : </label>
                <div class="col-sm-10">
                    <input placeholder="Jumlah" type="number" class="form-control" id="inputnumber3" name="jumlah">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="simpan" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </div>
    </form>
    <br>

    <?php

    if (isset($_POST['simpan'])) {
        $jumlah = $_POST['jumlah'];

        for ($i = 1; $i <= $jumlah; $i++) {


            echo "<div class ='card container alert alert-secondary' role='alert'>";
            echo "<table>";
            echo "<form action='Hsiswa.php' method='post'>";

            // Jumlah Siswa
            echo "<tr>";

            echo "</td>";
            echo "<tr>";
            echo "<h3 align='center'>Data Siswa Ke - $i</h3>";
            echo "</tr>";

            // NIS
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>NIS : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='NIS' type='number' class='form-control' id='inputnumber3' name='nis[]'>";
            echo "</div>";
            echo "</div>";

            // NAMA
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Nama : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Nama' type='text' class='form-control' id='inputnumber3' name='nama[]'>";
            echo "</div>";
            echo "</div>";

            // Kelas
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Kelas : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Kelas' type='text' class='form-control' id='inputnumber3' name='kelas[]'>";
            echo "</div>";
            echo "</div>";

            // indo
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Bahasa Indoneisa : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Bahasa Indonesia' type='number' class='form-control' id='inputnumber3' name='indo[]'>";
            echo "</div>";
            echo "</div>";

            // inggris
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Bahasa ingris : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Bahasa Inggris' type='number' class='form-control' id='inputnumber3' name='ing[]'>";
            echo "</div>";
            echo "</div>";

            // mtk
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Matematika : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Matematika' type='number' class='form-control' id='inputnumber3' name='mtk[]'>";
            echo "</div>";
            echo "</div>";

            // RPL
            echo "<div class='form-group row'>";
            echo "<label for='inputnumber3' class='col-sm-2 col-form-label'>Kejurusan : </label>";
            echo "<div class='col-sm-10'>";
            echo "<input placeholder='Produktif' type='number' class='form-control' id='inputnumber3' name='lab[]'>";
            echo "</div>";
            echo "</div>";
        }

        // SUBMIT

        echo "<div class='form-group row'>";
        echo "<div class='col-sm-10'>";
        echo "<button type='submit' name='simpan' value='Simpan' class='btn btn-primary'>Simpan";

        echo "</button>";
        echo "</button>";

        echo "</div>";
        echo "</div>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";





        echo "<td><br></td>";
        echo "</form>";
        echo "</table";
    }

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

</body>

</html>