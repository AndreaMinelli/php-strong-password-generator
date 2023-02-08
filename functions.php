<?php

$password_length = $_GET['password-length'] ?? '';
$words = 'abcdefghijklmnopqrstuvwxyz';
$up_words = strtoupper($words);
$numbers = '0123456789';
$symbols = '!?.-+/';
$total_char = $words . $up_words . $numbers
    . $symbols;
function get_random_word($string, $length)
{
    $random_word = '';
    $max_value = strlen($string);
    do {
        $index = rand(0, $max_value);
        $random_word .= substr($string, $index, 1);
    } while (strlen($random_word) < $length);
    return $random_word;
}
if ($password_length) {
    session_start();
    $password = get_random_word($total_char, $password_length);
    $_SESSION['password'] = $password;
    header('Location: password_page.php');

}