<?php
$ctg = $_GET["ctg"];
$sql = "SELECT p.id, p.title, p.createdat, c.name, u.username, u.id as 'userid', COUNT(up.postid) AS 'likes'
        FROM posts p LEFT OUTER JOIN upvotepost up ON p.id = up.postid
        INNER JOIN categories c ON p.categoryid = c.id
        INNER JOIN users u ON p.userid = u.id
        WHERE c.name = :ctg
        GROUP BY p.id, p.title, p.createdat, c.name, u.username, u.id
        ORDER BY p.createdat DESC
        LIMIT :limit";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':ctg', $ctg);
$stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
$stmt->execute();
$allPosts = $stmt->fetchAll();
