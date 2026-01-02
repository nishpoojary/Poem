<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM poems WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($row['title']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
</div>

<div class="view-container">
    <div class="view-meta">
        <?php echo $row['created_date']; ?> • <?php echo $row['created_time']; ?>
    </div>

    <div class="poem-text">
        <?php echo nl2br(htmlspecialchars($row['poem'])); ?>
    </div>

    <div class="back-btn">
        <a href="index.php">← Back to Poems</a>
    </div>
</div>

</body>
</html>
