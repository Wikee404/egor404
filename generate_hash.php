<?php
$newPassword = '12345'; // замените на желаемый пароль
echo password_hash($newPassword, PASSWORD_DEFAULT);