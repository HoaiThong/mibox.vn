<!-- "D:/Program File/xampp/php/extras/ssl/openssl.cnf", -->
<?php
    ini_set('display_errors', 1);

    $config = array(
        "config" => "D:/Program File/xampp/php/extras/ssl/openssl.cnf",
        "digest_alg" => "sha512",
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    );

    // Create the private and public key
    $res = openssl_pkey_new($config);

    if ($res === false) die('Failed to generate key pair.'."\n"); 

    if (!openssl_pkey_export($res, $privKey, "HoaiThong91", $config)) die('Failed to retrieve private key.'."\n"); 

    // Extract the private key from $res to $privKey
    openssl_pkey_export($res, $privKey, "HoaiThong91", $config);

    echo "<br/>";
    echo "Private Key = ".$privKey;
    echo "<br/>";

    // Extract the public key from $res to $pubKey
    $pubKey = openssl_pkey_get_details($res);
    $pubKey = $pubKey["key"];

    echo "<br/>";
    echo "Public Key = ".$pubKey;
    echo "<br/>";

    $data = 'hello';

    // Encrypt the data to $encrypted using the public key
    openssl_public_encrypt($data, $encrypted, $pubKey);
    echo "<br/>";
    echo "Encrypted Data = ".$encrypted;
    echo "<br/>";

    // Decrypt the data using the private key and store the results in $decrypted
    openssl_private_decrypt($encrypted, $decrypted, openssl_pkey_get_private($privKey, "HoaiThong91"));

    echo "<br/>";
    echo "Decrypted Data = ".$decrypted;
    echo "<br/>";
?>