
<?php
header('Content-Type: text/plain');

$json = file_get_contents('php://input');
$data = json_decode($json);

if (json_last_error() === JSON_ERROR_NONE && is_object($data)) {
    echo "Name: " . htmlspecialchars($data->name ?? '') . "\n";
    echo "Location: " . htmlspecialchars($data->location ?? '') . "\n";
    echo "Email: " . htmlspecialchars($data->email ?? '') . "\n";
    echo "Course: " . htmlspecialchars($data->course ?? '');
} else {
    echo "Invalid JSON input.";
}
?>
