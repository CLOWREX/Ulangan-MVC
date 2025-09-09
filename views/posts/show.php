<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    <small>Dibuat pada: <?= $post['created_at'] ?></small>
    <br><br>
    <a href="index.php">← Kembali</a>
</body>
</html>
