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

    $sql = "SELECT service_type, service_content FROM service";
    $result = $conn->query($sql);

    $homeContent = [];
    while ($row = $result->fetch_assoc()) {
        $services[$row['service_type']] = $row['service_content'];
    }

    $conn->close();
?>

<body>

<section class="home naik">
        <div class="home-content">
            <h1> <span>My Services</span></h1>

                <?php
                    foreach ($services as $type => $value) {
                        echo "<div class = 'card'>";
                        echo "<h3> $type</h3>";
                        echo "<p> $value </p>";
                        echo "</div>";
                    }
                ?>
        </div>
           
    </section>
</body>
</html>