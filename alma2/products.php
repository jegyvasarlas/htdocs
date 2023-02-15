<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if($_GET['products']) {
        $stmt = $pdo->prepare("SELECT * FROM products");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return;
    }
}