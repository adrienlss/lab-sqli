<?php
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', getenv('MYSQL_HOST') ?: 'db', getenv('MYSQL_DATABASE') ?: 'lab_sqli');
$user = getenv('MYSQL_USER') ?: 'lab_user';
$pass = getenv('MYSQL_PASSWORD') ?: 'changeme-user';
$pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $message = 'Bienvenue ' . htmlspecialchars($row['username']);
        if (!empty($row['flag'])) {
            $message .= ' - ' . htmlspecialchars($row['flag']);
        }
    } else {
        $message = 'Identifiants invalides';
    }
}
?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Lab SQLi - Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Utilisateur</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
