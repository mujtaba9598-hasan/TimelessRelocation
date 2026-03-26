<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$name    = isset($_POST['name'])    ? htmlspecialchars(strip_tags(trim($_POST['name'])))    : '';
$phone   = isset($_POST['phone'])   ? htmlspecialchars(strip_tags(trim($_POST['phone'])))   : '';
$email   = isset($_POST['email'])   ? htmlspecialchars(strip_tags(trim($_POST['email'])))   : '';
$service = isset($_POST['service']) ? htmlspecialchars(strip_tags(trim($_POST['service']))) : '';
$message = isset($_POST['message']) ? htmlspecialchars(strip_tags(trim($_POST['message']))) : '';

if (empty($name) || empty($phone) || empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name, phone, and email are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$to = 'info@timelessrelocation.com';
$subject = "New Inquiry from $name - $service";

$body  = "You have a new inquiry from the website contact form.\n\n";
$body .= "Name: $name\n";
$body .= "Phone: $phone\n";
$body .= "Email: $email\n";
$body .= "Service: $service\n";
$body .= "Message:\n$message\n";

$headers  = "From: noreply@timelessrelocation.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Your inquiry has been sent successfully. We will get back to you soon!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send email. Please try WhatsApp or call us directly.']);
}
