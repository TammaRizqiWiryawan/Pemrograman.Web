<?php
    include "include/header.php";

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "portore";

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT experience_type, deskripsi, Tahun FROM experience";
    $result = $conn->query($sql);

    $experiences = [];
    while ($row = $result->fetch_assoc()) {
        $experiences[] = [
            'experience_type' => $row['experience_type'],
            'deskripsi' => $row['deskripsi'],
            'Tahun' => $row['Tahun']
        ];
    } 

    $conn->close();
?>

<body>

<section class="home naik">
        <div class="home-content">
            <h1> <span>My Experience</span></h1>

                <?php
                    foreach ($experiences as $experience) {
                        echo "<div class='card'>";
                        echo "<h3>" . $experience['experience_type'] . "</h3>";
                        echo "<p>" . $experience['deskripsi'] . "</p>";
                        echo "<p>Tahun: " . $experience['Tahun'] . "</p>";
                        echo "</div>";
                    }
                ?>
        </div>
           
    </section>
</body>
</html>