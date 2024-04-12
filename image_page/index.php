<?php include 'get_info.php'; ?>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<form action="add_info.php" method="POST">
    <div>
        <label for="title">
            Title:
        </label>
        <input type="text" name="title" required="">
    </div>
     <div>
        <label for="url">
            URL:
        </label>
        <input type="url" name="url" required="">
    </div>
    <input type="submit" title="Submit">
    
</form>
<?php foreach($result as $row): ?>
<div>
    <h5><?= $row['title'] ?></h5>
    <img src="<?= $row['url'] ?>">
</div>

<?php endforeach ?>