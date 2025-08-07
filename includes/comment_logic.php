<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'dp_db';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Set this BEFORE including the file:
if (!isset($comment_table)) {
    die("No comment table defined!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $comment = trim($_POST['comment']);
    if ($name !== '' && $comment !== '') {
        $stmt = $conn->prepare("INSERT INTO $comment_table (name, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $comment);
        $stmt->execute();
        $stmt->close();
        header("Location: " . $_SERVER['PHP_SELF'] . "#comments");
        exit;
    }
}

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $conn->query("DELETE FROM $comment_table WHERE id = $id");
    header("Location: " . $_SERVER['PHP_SELF'] . "#comments");
    exit;
}

$comments = $conn->query("SELECT id, name, comment FROM $comment_table ORDER BY id DESC");
?>
