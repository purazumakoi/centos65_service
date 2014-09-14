<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>

<?php

$conn = "host=localhost dbname=test user=test password=test";
$link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');

// PostgreSQLに対する処理
$result = pg_query('SELECT * FROM test');
if (!$result) {
    die('クエリーが失敗しました。'.pg_last_error());
}

for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
    $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
    print($rows['id']);
    print($rows['name']);
    print "<br>";
}

$close_flag = pg_close($link);

if ($close_flag){
    print('切断に成功しました。<br>');
}

?>

</body>
</html>