<?php
$resuit = mail("ИМЯ: $_POST[text] Сообщение: $_POST[email] Тема: $_POST[text] Сам текст: $_POST[input]");

if ($result) {
    echo "<p>Сообщение отправлино успешно!</p>";
}
eles {
    echo "<p>Сообщение НЕ отправлино!</p>"; 
}
?>