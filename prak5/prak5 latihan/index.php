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
        <label for="nim">
            NIM
            <input type="number" name="nim" id="nim" autocomplete="off">
        </label>
        <label for="nama">
            Nama
            <input type="text" name="nama" id="nama" autocomplete="off">
        </label>
        <label for="prodi">
            Prodi
        </label>
        <select name="prodi" id="prodi">
            <option value="IF"> Teknik Informatika </option>
            <option value="EL"> Teknik Elektro </option>
            <option value="ME"> Teknik Mesin </option>
            <option value="TG"> Teknik Geofisika </option>
            <option value="GL"> Teknik Geologi </option>
        </select>
    </form>

    <button id="btn_tampil"> Tampilkan </button>

    <br>
    <div id="tampil_data"></div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $("#tampil_data").load("tampil.php");
            $("#btn_tampil").click(function () {
                let data = $("#form_mahasiswa").serialize();
                $.ajax({
                    type : "POST",
                    url : "tambah.php",
                    data : data,
                    success : function (response) {
                        $("#tampil_data").load("tampil.php");
                    }
                });
            });
        });
    </script>
</body>
</html>