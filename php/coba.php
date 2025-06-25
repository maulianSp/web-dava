<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Daftar Mahasiswa</h1> -->

    <!-- <ol>
        <li>Mahasiswa ke - 1</li>
        <li>Mahasiswa ke - 2</li>
        <li>Mahasiswa ke - 3</li>
        <li>Mahasiswa ke - 4</li>
        <li>Mahasiswa ke - 5</li>
    </ol> -->

    <!-- <ol>
        <?php
            // for($i=1;$i<=100;$i++){
            //     echo "<li>Mahasiswa Ke - $i</li>";
            // }
        ?>
    </ol> -->

    <?php
        // echo "<h1>hello world</h1>";
        
        // VARIABEL
        $nama = "Maulian Saputra";
        $nilai = 70;

        echo "Nama saya adalah $nama dan nilai saya adalah $nilai";

        // aturan menulis variabel
        // 1. variabel diawali dengan simbol ($)
        // 2. tidak boleh menggunakan spasi ($nama lengkap)
        // 3. tidak boleh mengawali variabel dengan angka 
        //    atau simbol kecuali _ (underscore)

        echo "<hr>";
        //OPERATOR
        //1. aritmatika
                // + tambah
                // - kurang
                // / bagi 
                // * kali
                // ** pangkat
                // % modulus
        // 2. perbandingan
                // = adalah
                // == sama dengan
                // === identik
                // != tidak sama dengan
                // > lebih besar
                // < lebih kecil
                // >= lebih besar sama dengan
                // <= lebih kecil sama dengan
        // STRUKTUR PEMROGRAMAN (kontrol & perulangan)
        // 1. struktur kontrol (IF)

        // $Nama != $nama (case sensitive)
        $nama2 = "Budi";
        $umur = 20;

        // if(kondisi){
        //     statement;
        // }

        if($umur >= 17){
            echo "Hai Budi, Kamu sudah dewasa";
        }


    ?>
</body>
</html>