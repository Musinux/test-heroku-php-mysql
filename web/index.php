<h1>
<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$pdo = new PDO("mysql:host=".$dbopts['host'].";dbname=".$dbopts['path'].";charset=utf8mb4", $dbopts['user'], $dbopts['pass']);

$stmt = $pdo->query('INSERT INTO users (firstname, lastname) VALUES ("louis", "cherel")');

$stmt->fetch()

echo $_GET['testvariable'];
?>
</h1>
