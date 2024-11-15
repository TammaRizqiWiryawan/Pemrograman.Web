<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio Website</title>
</head>

<body>
    <header>
        <a href="#" class="logo">(ʘᴥʘ)</a>
            <?php
                $current_page = basename($_SERVER['PHP_SELF']);
            ?>
        <nav>
            <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>"> Home</a>
            <a href="service.php" class="<?= ($current_page == 'service.php') ? 'active' : '' ?>">Services</a>
            <!-- <a href="skills.php" class="<?= ($current_page == 'skills.php') ? 'active' : '' ?>">Skills</a> -->
            <a href="review.php" class="<?= ($current_page == 'review.php') ? 'active' : '' ?>">Review</a>
            <a href="experience.php" class="<?= ($current_page == 'experience.php') ? 'active' : '' ?>">Experience</a>
            <a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
        </nav>
    </header>
</body>
</html>