<?php
$username="paswdT6S";
$uppercase = preg_match('@[A-Z]@', $username );
$lowercase = preg_match('@[a-z]@', $username );
$number    = preg_match('@[0-9]@', $username );

if($uppercase && $lowercase && $number && strlen($username )>=5 && strlen($username )<=9 ){
    echo "username word memenuhi kriteria";
}else{
    echo
    "username word antara 5 - 9 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}

$password="paswdT6S";
$uppercase = preg_match('@[A-Z]@', $password );
$lowercase = preg_match('@[a-z]@', $password );
$number    = preg_match('@[0-9]@', $password );

if($uppercase && $lowercase && $number && strlen($password )>=5 && strlen($password )<=9 ){
    echo "password word memenuhi kriteria";
}else{
    echo
    "password word tidak memenuhi karakter";
}

?>