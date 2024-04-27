<?php

//config
define('BASE_URL','http://localhost/barani_project');


function asset($file)
{
    return trim(BASE_URL,'/').'/'. trim($file,'/');
}

//echo asset('assets/css/style.php');

function dd($var)
{
    echo'<pre>';
    var_dump($var);
    exit;
}
function redirect($url)
{
    header('location:'.trim(BASE_URL,'/').'/'.trim($url,'/'));
    exit;
}

// $user = ['ali','hosain','hasan'];
// dd($user);


function base_url($path = '') {
    $protocol = ($_SERVER['HTTPS'] ?? '') === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $dirname = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return $protocol . $host . $dirname . '/' . $path;
  }
  
?>