<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>DOMPDF</title>
</head>

<body>
    <!-- buat kop surat -->
    <table width="100%" style="border-bottom: 3px solid black; margin: 20px 0px;">
        <tr>
            <td width="20%" align="center">
                <img src="<?= $image ?>" width="100" height="100">
            </td>
            <td width="60%" align="center">
                <h3>PEMERINTAH KABUPATEN BANDUNG</h3>
                <h3>KECAMATAN CIMAUNG</h3>
                <h3>DESA CIMAUNG</h3>
                <p>Jl. Raya Cimaung No. 1 Telp. (022) 542 1234</p>
            </td>
        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>