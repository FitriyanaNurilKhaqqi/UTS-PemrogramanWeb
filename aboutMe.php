<?php
include 'koneksi/database.php';
$sql = "SELECT about_me, quote FROM user_info WHERE id = 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $aboutMe = $row['about_me'];
    $quote = $row['quote']; 
} else {
    $aboutMe = "About me content is not available.";
    $quote = "Inspirational quote is not available."; 
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?> 

    <div class="container main-content py-5">
        <h1 class="display-4 text-center">About Me</h1>
        <p class="description" style="text-align: justify;">
            <?php echo $aboutMe; ?> 
        </p>
        <blockquote class="text-center">
            "<?php echo $quote; ?>" 
        </blockquote>
    </div>

    <div class="scroll-left">
        <div class="inner">
            <?php for ($i = 2; $i <= 11; $i++): ?> 
                <img src="assets/images/image<?php echo $i; ?>.jpg" alt="Image <?php echo $i; ?>">
            <?php endfor; ?>
            <?php for ($i = 2; $i <= 11; $i++): ?> 
                <img src="assets/images/image<?php echo $i; ?>.jpg" alt="Image <?php echo $i; ?>">
            <?php endfor; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
