<?php
include 'koneksi/database.php'; 
$sql = "SELECT skill_name, skill_description FROM skills"; 
$result = $conn->query($sql);

$skills = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $skills[] = $row; 
    }
} else {
    $skills = []; 
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    <?php include 'header.php'; ?> 

    <div class="container main-content py-5">
        <h1 class="display-4 text-center">Skills</h1>
        <div class="skills-container">
            <?php foreach ($skills as $skill): ?>
                <button class="skills-skill-button">
                    <div class="skill-title"><?php echo $skill['skill_name']; ?></div>
                    <div class="skill-description"><?php echo $skill['skill_description']; ?></div>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
