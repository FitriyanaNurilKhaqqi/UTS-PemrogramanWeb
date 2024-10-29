<?php
include 'koneksi/database.php'; 

$message = ''; 
$showModal = false; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user_contacts (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);
    
    if ($stmt->execute()) {
        $message = "Your data has been successfully submitted."; 
        $showModal = true; 
    }
    
    $stmt->close();
}

$sql = "SELECT phone, email, instagram, whatsapp, linkedin FROM contacts LIMIT 1"; 
$result = $conn->query($sql);
$contact = [];

if ($result->num_rows > 0) {
    $contact = $result->fetch_assoc();
} else {
    $contact = [
        'email' => 'fitriyananurilkh@gmail.com',
        'phone' => '089509463731',
        'instagram' => '#',
        'whatsapp' => '#',
        'linkedin' => '#'
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container main-content contact-container">
        <section class="contact-form-section">
            <h1 class="gradient-text">Contact Me</h1>
            <p>Please provide your name and email to get in touch with me!</p>
            <form method="POST" action="">
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter a valid email address" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            <label for="name">Name</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-submit mt-3">Submit</button>
            </form>
        </section>

        <section class="contact-info-section">
            <div class="contact-info-item">
                <i class="fas fa-envelope"></i>
                <p><?php echo htmlspecialchars($contact['email']); ?></p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-phone"></i>
                <p><?php echo htmlspecialchars($contact['phone']); ?></p>
            </div>
            <div class="contact-info-item">
                <i class="fab fa-instagram"></i>
                <p><a href="<?php echo htmlspecialchars($contact['instagram']); ?>" target="_blank">Instagram</a></p>
            </div>
            <div class="contact-info-item">
                <i class="fab fa-whatsapp"></i>
                <p><a href="<?php echo htmlspecialchars($contact['whatsapp']); ?>" target="_blank">WhatsApp</a></p>
            </div>
            <div class="contact-info-item">
                <i class="fab fa-linkedin"></i>
                <p><a href="<?php echo htmlspecialchars($contact['linkedin']); ?>" target="_blank">LinkedIn</a></p>
            </div>
        </section>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if ($showModal): ?>
                        <?php echo $message; ?>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        <?php if ($showModal): ?>
            var myModal = new bootstrap.Modal(document.getElementById('successModal'));
            myModal.show();
        <?php endif; ?>
    </script>
</body>
</html>

<?php
$conn->close(); 
?>
