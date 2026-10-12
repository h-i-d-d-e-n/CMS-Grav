<?php

header('Content-Type: application/json; charset=utf-8');

$dataDir = __DIR__ . '/user/data/chat';
$dataFile = $dataDir . '/messages.json';

if (!is_dir($dataDir)) {
  mkdir($dataDir, 0755, true);
}

if (!file_exists($dataFile)) {
  file_put_contents($dataFile, '[]');
}

$messages = json_decode(file_get_contents($dataFile), true) ?: [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo json_encode($messages);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Method not allowed']);
  exit;
}

$name = trim($_POST['name'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $message === '') {
  http_response_code(400);
  echo json_encode(['error' => 'Name and message are required']);
  exit;
}

if (mb_strlen($name) > 40 || mb_strlen($message) > 500) {
  http_response_code(400);
  echo json_encode(['error' => 'Name or message is too long']);
  exit;
}

$messages[] = [
  'name' => $name,
  'message' => $message,
  'time' => date('H:i')
];

$messages = array_slice($messages, -100);

file_put_contents($dataFile, json_encode($messages, JSON_PRETTY_PRINT), LOCK_EX);

echo json_encode(['success' => true]);
