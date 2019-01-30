<?php
$resuit = mail("ИМЯ: $_POST[ez0] Сообщение: $_POST[ez1] Тема: $_POST[ez2] Сам текст: $_POST[ez3]");

if ($result) {
    echo "<p>Сообщение отправлино успешно!</p>";
}
eles {
    echo "<p>Сообщение НЕ отправлино!</p>"; 
}
?>