<?php

include 'connection.php';

$query = "SELECT * FROM mail";
$result = $pdo->query($query);

if (isset($_POST['name']) && isset($_POST['email']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = "INSERT INTO mail(name, email) VALUES ('$name', '$email')";
$result = $pdo->query($query);
} echo '<script>alert("Форма успешно отправлена")
           window.location="index.php"</script>'

?>