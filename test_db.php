<?php
include 'config.php';
try {
    $stmt = $conn->query("SHOW DATABASES LIKE 'shop_db'");
    if ($stmt->rowCount() > 0) {
        echo "Database 'shop_db' exists.\n";
        $stmt = $conn->query("USE shop_db; SHOW TABLES;");
        echo "Tables in 'shop_db':\n";
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            echo "- " . $row[0] . "\n";
        }
    } else {
        echo "Database 'shop_db' does not exist.\n";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
?>
