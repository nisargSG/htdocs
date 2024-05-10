<?php

$cipherKey="7dga87wgd78";

//convert into encryption
function encodeInfo($originalText) {
    global $cipherKey;
    $keyLength = strlen($cipherKey);
    $originalTextLength = strlen($originalText);
    $encodedText = '';
    for ($i = 0; $i < $originalTextLength; $i++) {
        $encodedText .= $originalText[$i] ^ $cipherKey[$i % $keyLength];
    }
    return $encodedText;
}

// Function to decrypt ciphertext using XOR
function decodeInfo($encodedText) {
    return encodeInfo($encodedText); // XOR decryption is the same as encryption
}

?>