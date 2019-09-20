<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi Member AIDI</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="js/aos/aos.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="DataTables-1.10.18/css/jquery.dataTables.css"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="DataTables-1.10.18/js/jquery.dataTables.js"></script>
        
        <script type="text/javascript">
        $(document).ready(function(){
            $('#tb').DataTable();
        });
</script>

</head>
<body>
     
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
        
        <table id="tb" class="table table-striped">
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
                    $data = fread($filehandle, 20000);
                    fclose($filehandle);
                    echo "$data";
                ?>
            </tbody>
        
        </table><br>
        <script type="text/javascript" src="js/particles.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/aos/aos.js"></script>
        <script src="js/typed.js"></script>
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