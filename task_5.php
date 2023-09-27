<?php
/* Task 5: Password Generator */

function generatePassword($length)
{
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    $totalChars = strlen($allChars);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $totalChars);

        echo $randomIndex . "\n";

        $password .= $allChars[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: $password\n";