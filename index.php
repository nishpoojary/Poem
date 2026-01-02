<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM poems ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Poems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>My Poems</h1>

<div class="top-action">
    <a href="create.php" class="btn">＋ New Poem</a>
</div>

<div class="poem-list">
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <a href="view.php?id=<?php echo $row['id']; ?>" class="poem-card-link">
        <div class="poem-card">
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p class="poem-date">
                <?php echo $row['created_date']; ?> • <?php echo $row['created_time']; ?>
            </p>
        </div>
    </a>
<?php } ?>
</div>

</body>
</html>
