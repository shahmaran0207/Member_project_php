<?php

$servername = "localhost";
$dbuser = "root";
$dbpassword = "Since2018@";
$dbname = "php";

try {
    $db = new PDO("mysql:host={$servername};port=3306;dbname={$dbname}", $dbuser, $dbpassword);

    // Prepared Statement를 실제 데이터베이스에서 사용하도록 설정
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // MySQL 전용 옵션으로, 현재 드라이버가 MySQL일 때만 설정
    if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); // 쿼리 버퍼링 활성화
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 에러를 예외로 처리하도록 설정

    echo "DB 연결 성공";
} catch (PDOException $e) {
    echo "DB 연결 실패: " . $e->getMessage();
}
