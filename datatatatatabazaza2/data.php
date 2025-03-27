<?php
// Pripojenie k databáze
$host = 'localhost'; // alebo IP adresa servera
$dbname = 'moja_db'; // nahraďte skutočným názvom databázy
$username = 'root'; // nahraďte skutočným používateľským menom
$password = ''; // nahraďte skutočným heslom

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Vytvorenie tabuľky ak neexistuje
    $sql = "CREATE TABLE IF NOT EXISTS comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        author VARCHAR(50) NOT NULL,
        comment TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    
    // Spracovanie formulára
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $author = htmlspecialchars($_POST['author']);
        $comment = htmlspecialchars($_POST['comment']);
        
        // Vloženie dát do databázy
        $stmt = $conn->prepare("INSERT INTO comments (author, comment) VALUES (:author, :comment)");
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':comment', $comment);
        
        if ($stmt->execute()) {
            header("Location: index.php?status=success");
        } else {
            header("Location: index.php?status=error");
        }
        exit();
    }
} catch(PDOException $e) {
    header("Location: index.php?status=error");
    exit();
}

$conn = null;
?>