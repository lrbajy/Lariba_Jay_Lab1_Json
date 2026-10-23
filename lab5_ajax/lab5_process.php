
<?php
header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json);

$name = trim($data->name ?? '');

if ($name !== '') {
    echo json_encode([
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Please enter your name."
    ]);
}
?>
