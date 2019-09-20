<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Member AIDI</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="js/aos/aos.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</head>
<body>
    <!-- <svg class="ssvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e74c3c" fill-opacity="1" d="M0,288L60,282.7C120,277,240,267,360,250.7C480,235,600,213,720,218.7C840,224,960,256,1080,250.7C1200,245,1320,203,1380,181.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
     -->
     <div class="svvg">
        <img src="images/wave.svg">
     </div>
    <div id="particles-js"></div>
    <div class="judul">
    <h2 data-aos="fade-up"><span class="type"></span></h2>
    <h2 data-aos="fade-left">Asosiasi <b>Ilmuan Data</b> Indonesia</h2>
    </div>
    
        <form method="POST" action="cetak.php" enctype="multipart/form-data"> 
        
            <table>
                <tr>
                    <td>Nama</td>
                    <td>  <input type="text" name="nama" placeholder="Masukan Nama Anda" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> 
                        <select name="kelamin">
                            <option value="">-- Pilih --</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tempat &</td>
                    <td>  <input type="text" name="tempat" placeholder="Masukan Tempat Lahir Anda" required></td>
                </tr>
                <tr>
                    <td>Tgl.Lahir</td>
                    <td> <input type="date" name="lahir" placeholder="Masukan Tanggal Lahir Anda" required></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td> <input type="text" name="pekerjaan" placeholder="Masukan Pekerjaan Anda" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> 
                        <textarea name="alamat" placeholder="Masukan Alamat Anda"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Upload Foto</td>
                    <td> <input type="file"  name="upload" id="upload"></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" name="submit" value="Submit">
                    
                    </td>
                </tr>
            </table>
        </form>
        
        <table id="tb" class="table table-striped" border=1px>
            <thead>
                <tr >
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat &</th>
                    <th scope="col">Tgl.Lahir</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $fileku = "file.txt";
                    $filehandle = fopen($fileku, 'r') or die ("File gagal dibuka");
                    $data = fread($filehandle, 1000);
                    fclose($filehandle);
                    echo "$data";
                ?>
            </tbody>
        
        </table>
        <script type="text/javascript" src="js/particles.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/aos/aos.js"></script>
        <script src="js/typed.js-master/lib/typed.js"></script>
        <script>
            AOS.init();
        </script>
         <script>
            var typed = new Typed(".type", {
            strings: [
                "REGISTRASI <b>MEMBER</b>",
                ],
                typeSpeed: 60,
                backSpeed: 60,
                loop: true
            });
        </script>
    </body>
</html>