<?php 
$sql = "SELECT c.id, u.username, c.parentid, c.createdat, c.text 
        FROM comments c INNER JOIN users u ON c.userid = u.id 
        WHERE c.parentid is null AND c.postid = :pid
        ORDER BY c.createdat DESC";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":pid", $_GET["id"]);
$stmt->execute();
$main_comments = $stmt->fetchAll();