<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $data = "Name: $name\nPhone: $phone\nEmail: $email\nDoctor: $doctor\nDate: $date\nTime: $time\n\n";

    $file = fopen("appointments.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect to home or any other page after submission
    header("Location: index.html#");
    exit();
}
?>
