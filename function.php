<?php 
function sum($a, $b)
{
    return $a + $b;
}


$Huy = array(
    'username' => 'huyle',
    'password' => '123'
);

$users = array($Huy);


function findUserByUserID($username)
{
    global $users;
    for($i = 0; $i < sizeof($users); $i++)
    {   
        $user = $users[$i];
        if($user['username'] == $username)
        {
            return $user;
        }
    }
    return null;
}