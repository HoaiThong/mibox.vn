<!-- "D:/Program File/xampp/php/extras/ssl/openssl.cnf", -->
<?php
   $config = array(
            "config" => "D:/Program File/xampp/php/extras/ssl/openssl.cnf",
    "digest_alg" => "sha512",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
   
// Create the private and public key
$res = openssl_pkey_new($config);

// Extract the private key from $res to $privKey
openssl_pkey_export($res, $privKey);

echo "<br/>";
    echo "Private Key = ".$privKey;
    echo "<br/>";
// Extract the public key from $res to $pubKey
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];

$data = 'plaintext data goes here';

// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);

// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);
 echo "<br/>";
    echo "Private Key = ".$privKey;
    echo "<br/>";
     echo "<br/>";
    echo "Public Key = ".$pubKey;
    echo "<br/>";
echo $decrypted;
 echo "<br/>";
    echo "data = ".$encrypted;
    echo "<br/>";
?>