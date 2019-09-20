<html>
    <head>
        <title>Kartu Member AIDI</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

                
        <?php 
            if (isset($_POST["submit"])){
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $jenis = $_POST["kelamin"];
            $tempat = $_POST["tempat"];
            $lahir = $_POST["lahir"];
            $pekerjaan = $_POST["pekerjaan"];
            
            $file = $_FILES['upload'];
            $nama_file = $file['name'];
            $nama_tmp = $file['tmp_name'];
            $upload_dir = "images/";

            

            move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
            
        ?>
        <div id="particles-js">
     <div class="back">
        <a href="regis.php"><b>< </b> Back to Form </a>
        <?php 
            $fileku = "file.txt";
            $filehandle = fopen($fileku, 'a') or die ("File gagal dibuka");
            $datastring = "
                        <tr>
                            <td>$nama</td>
                            <td>$jenis</td>
                            <td>$tempat</td>
                            <td>$lahir</td>
                            <td>$pekerjaan</td>
                            <td>$alamat</td>
                        </tr>";
            fwrite($filehandle, $datastring);
            fclose($filehandle);
        ?>

    </div>
   
    <div class="member">
            <div class="logo">
                <img src="images/AIDI.png">
            </div>
            <div class="head">
                <h1>KARTU ANGGOTA</h1>
                <h2>Asosiasi Ilmuan Data Indonesia</h2>
            </div><br>
            <div class="identitas">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $nama ?></td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?php echo $jenis ?></td>
                        </tr>
                        <tr>
                            <td>Tempat &</td>
                            <td>: <?php echo $tempat ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: <?php echo $lahir ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>: <?php echo $pekerjaan ?></td>
                        </tr>
                        <tr>
                            <td >Alamat</td>
                            <td>: <?php echo $alamat ?></td>
                        </tr>
                    </table>
            </div>
            <div class="berlaku">
            <div class="foto">
                <img src="images/<?php echo $nama_file ?>" width="100px" height="90px">;
            </div>
                <h3>
                    <?php
                        $i = 0;
                        $i++;
                        echo date("Y-m-d$i");
                    ?>
                </h3>
                <h4>Berlaku Hingga 
                    <?php 
                        $daftar = date("d-m-Y");

                        $exp = date('d-m-Y', strtotime('+3 year', strtotime($daftar)));
                        
                        echo $exp 
                
                    ?>
                </h4>
            </div>
            <div class="qr">
                <img src="images/QR.png" alt="QR Dede Saepulloh">
            </div>
            <p>www.aidi.id</p>
    </div>
            </div>
<?php } ?>
    
    </body>
</html>
