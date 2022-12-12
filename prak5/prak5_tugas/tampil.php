<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th> No. </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
        </tr>

        <?php
            include "koneksi.php";

            $query = "SELECT * FROM data ORDER BY nim ASC";

            $result = mysqli_query($connection, $query);
            $i = 0;

            while ($data = mysqli_fetch_array($result)) :
                $i++;
        ?>
            <tr>
                <td> <?= $i ?> </td>
                <td> <?= $data["nim"] ?> </td>
                <td> <?= $data["nama"] ?> </td>
                <td> <?= $data["prodi"] ?> </td>
            </tr>
        <?php
            endwhile
        ?>
    </table>
    <script>
    $('#prodi').on('change', function () {

        var data = this.value;

        var table = $("tbody").find("tr");
        if (this.value == "Semua Prodi") {
            table.show();
            return;
        }
        table.hide();

        table.filter(function (i, v) {
            var $x = $(this);

            if ($x.is(":contains('" + data + "')")) {
                return true;
            }
    
            return false;
        }).show();
    });
</script>
</body>
</html>