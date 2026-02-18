$host = "db.3wa.io";
$port = "3306";
$dbname = "souleymanecoulibaly_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "souleymanecoulibaly";
$password = "f7cef8fc7ea56f74c64893bb7c9348c8";

$db = new PDO(
    $connexionString,
    $user,
    $password
);