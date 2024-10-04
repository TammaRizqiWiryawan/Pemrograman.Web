<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty ($_POST["tgllagir"])){
        //ambil tanggal lahir
        $tgllahir = $_POST["tgllahir"];
        //ubh str tgl lahir ke format datetime
        $tgl = new DateTime($tglLahir);
        //ambil detil dari $tgl
        $hari = $tgl ->format ('d');
        $bulan = $tgl ->format ('m');
        $tahun = $tgl ->format ('Y');

        //Array Nama Bulan 
        $bulanArray = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
        );
        $bulan = $bulanArray[$bulan];
        $strTglLahir = "$hari $bulan $tahun";
    }

    if (!empty($_POST["Hobby"])) {
        // Ambil data dari kontak
        $hobi = $_POST["Hobby"];
        // Kalau yang dipilih lebih dari 1
        if (count($hobi) > 1) {
            // Semua hobi digabung
            $LastHobi = array_pop($hobi);
            $strHobi = implode(", ", $hobi) . ", dan " . $LastHobi;
        } else {
            $strHobi = $hobi[0];
        }
        echo "tanggal lahir anda" . $strTglLahir . "<br>";
        echo "Hobi Anda adalah $strHobi<br>";
    } else {
        echo "Anda tidak memilih hobi.<br>";
    }
}
?>
</body>
</html>
