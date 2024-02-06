<?php
// Get the webhook data
$data = file_get_contents('php://input');

// Generate the filename based on the current date and time
$filename = date('Ymd_His') . '.txt';

// Save the data to the file
file_put_contents($filename, $data);

// Output a response (optional)
$response = [
    'status' => 'success',
    'message' => 'Webhook data saved successfully.'
];
echo json_encode($response);
?>
