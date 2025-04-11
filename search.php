<?php
$mysqli = new mysqli("localhost", "root", "", "search_engine");
$search = $mysqli->real_escape_string($_GET['q']);
$query = "
    SELECT * FROM telegram_users 
    WHERE MATCH(username, full_name, bio, groups)
    AGAINST ('$search' IN NATURAL LANGUAGE MODE)
    LIMIT 50
";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    echo "<div><strong>{$row['full_name']}</strong> ({$row['username']})</div>";
}
?>
