<?php
include 'koneksi/database.php'; 

$sql = "SELECT name, description, skills FROM user_info WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $skills = explode(',', $row['skills']);
} else {
    $name = "Name not found";
    $description = "Description not available";
    $skills = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?> 

    <div class="container main-content">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="profile-img-container">
                    <div class="dots-decoration dots-top-right"></div>
                    <div class="dots-decoration dots-bottom-left"></div>
                    <img src="assets/images/image1.jpg" alt="Profile Image" class="profile-img">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 fw-bolder gradient-text">I'm <?php echo $name; ?>!</h1>
                <p class="justified">
                    <?php echo $description; ?>
                </p>
                <div class="skills-container">
                    <?php foreach ($skills as $skill): ?>
                        <button class="home-skill-button"><?php echo trim($skill); ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
