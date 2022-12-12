<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form_mahasiswa">
    <label for="prodi">Prodi</label>
    <select name="prodi"id="prodi">
    <option value="">--Pilih Prodi--</option>
    <option value="Teknik Informatika"> Teknik Informatika </option>
    <option value="Teknik Elektro"> Teknik Elektro </option>
    <option value="Teknik Industri"> Teknik Industri </option>
    <option value="Teknik Lingkungan"> Teknik Lingkungan </option>
    <option value="Teknik Geologi"> Teknik Geologi </option>
    </select>
</form>
<br>
<div id="tampil_data"></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
    $(document).ready(function () {
        $("#tampil_data").load("tampil.php");
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
                type : "POST",
                url : "tampil.php",
                data : data,
                success : function (response) {
                    $("#tampil_data").load("tampil.php");
                }
            });
         });
</script>
</body>
</html>