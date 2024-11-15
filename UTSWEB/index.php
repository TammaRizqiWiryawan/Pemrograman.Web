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

    $sql = "SELECT content FROM home";
    $result = $conn->query($sql);

    $homeContent = [];
    while ($row = $result->fetch_assoc()) {
        $homeContent[] = $row['content'];
    }

    $conn->close();
?>

<section class="home">
    <div class="home-img">
        <img src="mewing.jpg" alt="">
    </div>

    <div class="home-content">
        <h1><span><?php echo $homeContent[0]; ?></span></h1>
        <h3><?php echo $homeContent[1]; ?><span></span></h3>
        <p><?php echo $homeContent[2]; ?></p>
    </div>
</section>
</body>
</html>
