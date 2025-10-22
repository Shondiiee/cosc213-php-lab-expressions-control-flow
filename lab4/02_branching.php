<?php
// Input via query string: e.g., ?role=admin&day=Sat&code=404
$role = $_GET['role'] ?? 'guest';
$day  = $_GET['day']  ?? 'Mon';
$code = (int)($_GET['code'] ?? 200);

// A) Role greeting with if/elseif/else
if ($role === 'admin') {
  echo "Welcome, admin\n";
} elseif ($role === 'editor') {
  echo "Welcome, editor\n";
} else {
  echo "Welcome, user\n";
}

// B) Working day vs weekend with switch
switch ($day) {
  case 'Sat':
  case 'Sun':
    echo "Enjoy your weekend!\n";
    break;
  default:
    echo "Back to work.\n";
}

// C) Status code message (use match if PHP 8+)
if (function_exists('match')) {
  $message = match ($code) {
    200, 201 => 'OKish',
    400 => 'Bad Request',
    401, 403 => 'Not Authorized',
    404 => 'Not Found',
    default => 'Unknown',
  };
  echo "$code => $message\n";
} else {
  // Fallback using switch
  switch ($code) {
    case 200: case 201: echo "OKish\n"; break;
    case 400: echo "Bad Request\n"; break;
    case 401: case 403: echo "Not Authorized\n"; break;
    case 404: echo "Not Found\n"; break;
    default: echo "Unknown\n";
  }
}
