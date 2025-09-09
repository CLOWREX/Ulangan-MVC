<!DOCTYPE html>
<html>
<head>
    <title>Blog MVC - Semua Postingan</title>
</head>
<body>
    <h1>Daftar Postingan</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="index.php?action=show&id=<?= $post['id'] ?>">
                    <?= htmlspecialchars($post['title']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>