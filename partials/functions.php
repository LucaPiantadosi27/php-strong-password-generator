
<?php

// var_dump($_GET['password']);

function genPassword()
{
    $genPassword = '';
    $characters = 'abcdefghilMNOPQRST0123456789@&$=!#*%+/';

    for ($i = 0; $i < strlen(trim($_GET['password'])); $i++) {
        $n = rand(0, strlen($characters) - 1);
        $genPassword = $genPassword . $characters[$n];
    }
    return $genPassword;
}

//var_dump(genPassword());

?>