<?php
// Подключение к базе данных

// Параметры подключения к базе данных
$servername = "localhost";
$username = "egorsiao_temp";
$password = "123Qwe";
$dbname = "egorsiao_temp";
$Status = $_POST['checkboxValue'];

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Запрос данных из таблицы

$sql = "UPDATE `Status` SET `Status`= $Status WHERE Id = 1"; 
$result = $conn->query($sql); 


?>