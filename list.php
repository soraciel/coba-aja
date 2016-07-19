nuning<!DOCTYPE html>
<html>
    <head>
        <title>CRUD codeigniter 3 - belajarphp.net</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <table class="table table-bordered">
            <tr><th>NIS</th><th>NAMA</th><th>JENIS KELAMIN</th><th colspan="2">OPERASI</th></tr>
            <?php
            foreach ($siswas->result() as $siswa) {
            $gender = $siswa->gender == 'F' ? 'Perempuan' : 'Laki Laki';
            echo "<tr>
            <td>$siswa->nis</td>
            <td>$siswa->nama</td>
            <td>$gender</td>
            <td></td>
            </tr>";
            }
            ?>
        </table>
    </body>
</html>
