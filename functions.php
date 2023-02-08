<?php

$password_length = $_GET['password-length'] ?? '';
$words = 'abcdefghijklmnopqrstuvwxyz';
$up_words = strtoupper($words);
$numbers = '0123456789';
$symbols = '!?.-+/';
$total_char = $words . $up_words . $numbers
    . $symbols;

function get_random_string($string, $length, $char_rips = 'yes')
{
    $random_word = '';
    $max_value = strlen($string);
    do {
        $index = rand(0, $max_value);
        $char = substr($string, $index, 1);
        if ($char_rips === 'no') {
            do {
                $index = rand(0, $max_value);
                $char = substr($string, $index, 1);
            } while (str_contains($random_word, $char));
        }
        $random_word .= $char;
    } while (strlen($random_word) < $length);
    return $random_word;
}
if ($password_length) {
    session_start();
    $password = get_random_string($total_char, $password_length, $char_rips);
    $_SESSION['password'] = $password;
    header('Location: password_page.php');

}