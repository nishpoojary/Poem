<!DOCTYPE html>
<html>
<head>
    <title>Create New Poem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>New Poem</h1>

<div class="form-card-wrapper">
    <div class="form-card">

        <form action="save_poem.php" method="post">

            <label>Title</label>
            <input type="text" name="title" placeholder="Poem title" required>

            <label>Date</label>
            <input type="date" name="date" required>

            <label>Time</label>
            <input type="time" name="time" required>

            <label>Poem</label>
            <textarea name="poem" placeholder="Write your poem here..." required></textarea>

            <button type="submit">Save Poem</button>

        </form>

    </div>
</div>

</body>
</html>
