<form form action="" method="POST">
    <table>
        <tr>
            <td width="130">Input Angka </td>
            <td><input type="text" name="angka" placeholder="Input Angka" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Generate Segitiga" name="submit"></td>
            <td><input type="submit" value="Generate Bilangan Ganjil" name="submit"></td>
            <td><input type="submit" value="Generate Bilangan Prima" name="submit"></td>
        </tr>
    </table>
    <h1>RESULT :</h1>

    <?php

    if ($_POST) {
        $angka =  $_POST["angka"];
        if ($angka % 2 == 0) {
            echo "bilangan Genap";
        } else {
            echo "Bilangan Ganjil";
        }
    }

    ?>
</form>