<!DOCTYPE html>
<html>
<head>
    <title>Output Aplikasi Penjualan Tiket Kereta Api</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detail Harga Tiket</h1>
        <?php
        if(isset($_POST['submit'])){
            $tujuan = $_POST['tujuan'];
            $hari = $_POST['hari'];
            $promo = $_POST['promo'];

            $harga_tiket = 0;

            // Menghitung harga tiket berdasarkan kota tujuan
            switch($tujuan){
                case 'Jakarta':
                    $harga_tiket = 250000;
                    break;
                case 'Bandung':
                    $harga_tiket = 150000;
                    break;
                case 'Surabaya':
                    $harga_tiket = 400000;
                    break;
                case 'Semarang':
                    $harga_tiket = 300000;
                    break;
                case 'Malang':
                    $harga_tiket = 450000;
                    break;
                case 'Purwokerto':
                    $harga_tiket = 200000;
                    break;
            }

            // Menghitung diskon berdasarkan hari keberangkatan
            $diskon_hari = 0;
            switch($hari){
                case 'Senin':
                    $diskon_hari = 0.03;
                    break;
                case 'Selasa':
                    $diskon_hari = 0.04;
                    break;
                case 'Rabu':
                    $diskon_hari = 0.01;
                    break;
                case 'Kamis':
                    $diskon_hari = 0.02;
                    break;
                case 'Jumat':
                    $diskon_hari = 0.02;
                    break;
                case 'Sabtu':
                    $diskon_hari = 0.03;
                    break;
                case 'Minggu':
                    $diskon_hari = 0.05;
                    break;
            }



            // Menghitung diskon tambahan jika menggunakan kode promo "KAIOKE"
            $diskon_promo = 0;
            if($promo === 'KAIOKE'){
                $diskon_promo = 0.02;
            }


            // Menambahkan PPN dan biaya layanan
            $ppn = round($total_harga * 0.11); // Hitung PPN dan bulatkan
            $biaya_layanan = 3000;
            $total_harga = $total_harga + $ppn + $biaya_layanan;

            echo "<p>Kota Tujuan: $tujuan</p>";
            echo "<p>Hari Keberangkatan: $hari</p>";
            echo "<p>Harga Tiket: Rp " . number_format($harga_tiket, 0, ',', '.') . "</p>";
            echo "<p>Kode Promo: $promo</p>";
            echo "<p>Diskon Hari: " . number_format($diskon_hari * 100, 2) . "%</p>";
            echo "<p>Diskon Kode Promo: " . number_format($diskon_promo * 100, 2) . "%</p>";
            echo "<p>Pajak PPN: Rp " . number_format($ppn, 0, ',', '.') . "</p>";
            echo "<p>Biaya Layanan Aplikasi: Rp 3.000</p>";
            echo "<p>Total Harga Tiket: Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
        }
        else {
            echo "<p>Silakan isi formulir di halaman sebelumnya untuk menghitung harga tiket.</p>";
        }
        ?>
    </div>
</body>
</html>
