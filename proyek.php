<?php
include 'koneksi/database.php'; 

$sql = "SELECT title, description, duration, skills FROM projects";
$result = $conn->query($sql);

$images = ["image12.jpg", "image13.jpg", "image14.jpg", "image15.jpg", "image16.jpg"];
$imageIndex = 0; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container py-5">
        <h1 class="display-4 text-center">Projects</h1>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="project-card mb-4">
                    <div class="row g-0">
                        <div class="col-md-8 project-info">
                            <div class="p-4">
                                <h3 class="project-title"><?php echo $row['title']; ?></h3>
                                <p><strong>Duration:</strong> <?php echo $row['duration']; ?></p>
                                <p><?php echo $row['description']; ?></p>
                                <p><strong>Skills:</strong> <?php echo $row['skills']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 project-image d-flex align-items-center justify-content-center">
                            <img src="assets/images/<?php echo $images[$imageIndex]; ?>" alt="<?php echo $row['title']; ?>" class="img-fluid rounded-end">
                        </div>
                    </div>
                </div>
                <?php 
                    $imageIndex++; 
                    if ($imageIndex >= count($images)) {
                        $imageIndex = 0;
                    }
                ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No projects found.</p>
        <?php endif; ?>

    </div>

    <?php include 'footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close(); 
?>
