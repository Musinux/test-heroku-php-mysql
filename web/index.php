<h1>
<?php
echo getenv('DATABASE_URL');
$dbopts = parse_url(getenv('DATABASE_URL'));

var_dump($dbopts);

$out = "mysql:host=" . $dbopts['host'] . ";dbname=" . $dbopts['path'] . ";charset=utf8mb4";
echo $out;

$pdo = new PDO($out, $dbopts['user'], $dbopts['pass']);

$stmt = $pdo->query('INSERT INTO users (firstname, lastname) VALUES ("louis", "cherel")');

$stmt->fetch();

echo $_GET['testvariable'];
?>
</h1>
