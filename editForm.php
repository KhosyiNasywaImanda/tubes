<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP MySQL</title>
</head>
<body>
    <?php
        include "myconnection.php";
        $id = $_GET['idmenu'];
        $query = "SELECT * FROM menu WHERE id=$id";
        $result = mysqli_query($connect, $query);
    ?>
    <form action="editProcess.php" method="POST" enctype="multipart/form-data">
        <table>
            <?php
                while($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> ID: </td>
                <td> <input type="text" name="myid" value="<?php echo $row['idmenu']; ?>" readonly> </td>
            </tr>
            <tr>
                <td> Nama Menu : </td>
                <td> <input type="text" name="myname" value="<?php echo $row['namamenu']; ?>"> </td>
            </tr>
            <tr>
                <td> Harga : </td>
                <td>
                    <textarea name="myaddress" rows="5" cols="20"> <?php echo $row['harga'];?> </textarea>
                </td>
            </tr>
            <tr>
                <td> Foto: </td>
                <td> <input name="Foto" type="file"> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="save" value="Simpan"> </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </form>
</body>
</html>