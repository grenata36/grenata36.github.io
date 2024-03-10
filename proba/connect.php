<?php


define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','form_test');
define('DB_DRIVER','mysql');
define('DB_CHARSET','utf8');

$tableName = 'registration';


try {
    $conn = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE . ';charset=' . DB_CHARSET, DB_USERNAME, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $vNev = $_POST['vNev'];
        $kNev = $_POST['kNev'];
        $email = $_POST['email'];
        $cim = $_POST['cim'];

        $sql = "INSERT INTO $tableName (kNev, vNev, email, cim) VALUES (:kNev, :vNev, :email, :cim)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':kNev', $kNev);
        $stmt->bindParam(':vNev', $vNev);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cim', $cim);
        $stmt->execute();
        $stmt->closeCursor();
    }

} catch (PDOException $e) {
    echo "Hiba: " . $e->getMessage();
}

$conn = null;

?>

