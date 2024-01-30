<?php

$curl = curl_init();

$data = array(
    'amount' => '1500',  // Ingresar monto en céntimos
    'currency_code' => 'PEN', // Ingresar moneda PEN o USD
    'email' => 'paolo@aclaralab.com',  // Correo del cliente
    'source_id' => 'ype_test_CjxTCrwPgeDoKd6K', // Ingresar token para realizar cobro aquí
    'description' => 'PAGO ACLARA LAB' // Descripción en estado de cuenta (opcional)
);


$curl = curl_init();

$data = array(
    'amount' => '1500',  // Ingresar monto en céntimos
    'currency_code' => 'PEN', // Ingresar moneda PEN o USD
    'email' => 'paolo@aclaralab.com',  // Correo del cliente
    'source_id' => 'ype_test_CjxTCrwPgeDoKd6K', // Ingresar token para realizar cobro aquí
    'description' => 'PAGO ACLARA LAB' // Descripción en estado de cuenta (opcional)
);

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.culqi.com/v2/charges',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer sk_test_bb98e8f167e8c8c5'
    ),
));

$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // El cargo se hizo solo si el código es 201
    if ($httpCode == 201) {
        echo 'Request successful (HTTP status 201 Created)';
        // Additional handling for 201 status code, if needed
    } else {
        echo 'Request failed with HTTP status ' . $httpCode;
        // Additional error handling for other status codes
    }
}

curl_close($curl);
echo $response;
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.culqi.com/v2/charges',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>$data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer sk_test_bb98e8f167e8c8c5'
    ),
));

$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // El cargo se hizo solo si el código es 201
    if ($httpCode == 201) {
        echo 'Request successful (HTTP status 201 Created)';
        // Additional handling for 201 status code, if needed
    } else {
        echo 'Request failed with HTTP status ' . $httpCode;
        // Additional error handling for other status codes
    }
}

curl_close($curl);
echo $response;