<?php
$resuit = mail("ИМЯ $_POST[ez]");

if ($result) {
    echo "<p>Сообщение отправлино успешно!</p>";
}
eles {
    echo "<p>Сообщение НЕ отправлино!</p>"; 
}
?>