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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST['name']);
        $review_content = $conn->real_escape_string($_POST['review_content']);

        $sql = "INSERT INTO review (name, review_content) VALUES ('$name', '$review_content')";

        if ($conn->query($sql) === TRUE) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    $sql = "SELECT name, review_content FROM review";
    $result = $conn->query($sql);

    $reviews = [];
    while ($row = $result->fetch_assoc()) {
        $reviews[$row['name']] = $row['review_content'];
    }

    $conn->close();
?>

<body>

<section class="home naik">
    <div class="home-content">
        <h1> <span>What People Say about My Services</span></h1>

        <?php
            foreach ($reviews as $type => $value) {
                echo "<div class='card'>";
                echo "<h3>$value</h3>";
                echo "<p> - $type </p>";
                echo "</div>";
            }
        ?> 
    </div>

    <section class="review-form">
    <h3>Submit a Review</h3>
    <form action="" method="post">
        <label for="name">Name:</label></br>
        <input type="text" id="name" name="name" required>

        <label for="review_content">Review:</label></br>
        <textarea id="review_content" name="review_content" rows="4" required></textarea>

        <button class="btn" type="submit">Submit Review</button>
    </form>
</section>
</section>



</body>
</html>
