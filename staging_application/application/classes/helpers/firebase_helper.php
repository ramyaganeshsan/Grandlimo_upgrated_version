<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function base64url_encode($data)
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function getFirebaseAccessToken()
{
    $jsonKey = json_decode(
        file_get_contents(
            APPPATH . 'config/grandlimopassenger-firebase-adminsdk-omr13-ac3adbf040.json'
        ),
        true
    );

    $header = base64url_encode(json_encode([
        'alg' => 'RS256',
        'typ' => 'JWT'
    ]));

    $now = time();
    $payload = base64url_encode(json_encode([
        'iss'   => $jsonKey['client_email'],
        'scope' => 'https://www.googleapis.com/auth/firebase.messaging',
        'aud'   => 'https://oauth2.googleapis.com/token',
        'iat'   => $now,
        'exp'   => $now + 3600
    ]));

    $signatureInput = $header . '.' . $payload;

    openssl_sign(
        $signatureInput,
        $signature,
        $jsonKey['private_key'],
        OPENSSL_ALGO_SHA256
    );

    $jwt = $signatureInput . '.' . base64url_encode($signature);

    $postData = http_build_query([
        'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
        'assertion'  => $jwt
    ]);

    $ch = curl_init('https://oauth2.googleapis.com/token');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_POSTFIELDS => $postData
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    return isset($result['access_token']) ? $result['access_token'] : false;
}

