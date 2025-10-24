<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container{
                background-color: white;
                border: 3px solid grey;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                max-width: 700px;
                width: 100%;
            }
            h1{
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                font-size: 28px;
            }
            .success-message{
                background-color: #d4edda;
                color: #155724;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
            }
            .error-message{
                background-color: #f8d7da;
                color: #721c24;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #f5c6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td{
                padding: 10px;
                text-align: center;
                border: 1px solid #ddd;
            }
            th{
                background-color: #f8f9fa;
            }
            .back-button{
                text-align: center;
                margin-top: 20px;
            }
            .back-button a{
                background-color: #007bff;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                transition: background-color 0.3s;
            }
            .back-button a:hover{
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h1>Data Registrasi User</h1>

            <?php
            if (isset($_POST['submit'])) {
                $namaDepan = $_POST['nama_depan'];
                $namaBelakang = $_POST['nama_belakang'];
                $umur = (int)$_POST['umur'];
                $asalKota = $_POST['asal_kota'];

                if ($umur <= 10) {
                    echo "<div class='error-message'> ❌ Error: Umur minimal 10 tahun!. Silakan isi kembali</div>";
                    echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
                    exit();
                } else {
                    echo "<div class='success-message'>Registrasi Berhasil!</div>";
                    echo "<table>";
                    echo "<tr><th>No</th><th>Nama Lengkap</th><th>Umur</th><th>Kota Asal</th></tr>";

                    for ($i = 1; $i <= $umur; $i++) {
                        // hanya baris ganjil dan bukan 7 atau 13
                        if ($i % 2 != 0 && $i != 7 && $i != 13) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>$namaDepan $namaBelakang</td>";
                            echo "<td>$umur tahun</td>";
                            echo "<td>$asalKota</td>";
                            echo "</tr>";
                        }
                    }

                    echo "</table>";
                    echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
                }
            } else {
                echo "<div class='error-message'>Error: Data tidak ditemukan!</div>";
                echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
            }
            ?>
        </div>
    </body>
</html>
