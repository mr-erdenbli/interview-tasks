<?php

header('Content-Type: application/json');

require_once __DIR__ . '/lib/StringValidator.class.php';

$requestInput = file_get_contents('php://input');
$requestInput = json_decode($requestInput, true);

$str = $requestInput['str'];

$response = [];

if (is_string($str)) {
    $stringValidator = new StringValidator($str);
    $response['data'] = $stringValidator->isValidPhpCode();
} else {
    $response['error'] = ['code' => 400, 'message' => 'Неверный формат входных данных'];
}

exit(json_encode($response));
