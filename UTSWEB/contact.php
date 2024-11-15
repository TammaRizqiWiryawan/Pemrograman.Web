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

    $sql = "SELECT contact_type, value FROM contact";
    $result = $conn->query($sql);

    $contacts = [];
    while ($row = $result->fetch_assoc()) {
        $contacts[$row['contact_type']] = $row['value'];
    }

    $conn->close();
?>

<section class="home start">
    <div class="home-img">
        <img src="HOME.jpg" alt="">
    </div>

    <div class="home-content ">
        <h1> You can find me at: </h1>
        
        <?php
        $defaultContacts = [
            'Discord' => 'dummy',
            'Gmail' => 'dummy',
            'Phone' => 'dummy',
            'LinkedIn' => 'dummy'
        ];

        $displayContacts = array_merge($defaultContacts, $contacts);

        foreach ($displayContacts as $type => $value) {
            echo "<h3> $type: <span> $value </span></h3>";
        }
        ?>
        
        <div class="social-icons">
            <a href="https://discord.com/users/757614419181174805"><i class="fa-brands fa-discord"></i></a>
            <a href="mailto:tamma2909@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            <a href="https://wa.me/6285717632684"><i class="fa-solid fa-phone"></i></a>
            <a href="https://www.linkedin.com/in/tamma-rizqi-wiryawan-953499335"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</section>
</body>
</html>

