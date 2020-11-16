<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="cari">Masukkan Bilangan Yang Dicari : </label>
        <input type="text" name="cari" id="cari"> <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $cari = $_POST['cari'];
            $angka = [273,281,384,119,392,184,105,129,204,219,274,275,263];
            for($i=0;$i<=count($angka)-1;$i++){
                if ($cari == $angka[$i]){
                    echo "Bilangan yang Anda cari ada pada urutan ke-" .($i+1);
                    die;
                } 
            }   echo "Bilangan tidak ada";
        }
    ?>
</body>
</html>