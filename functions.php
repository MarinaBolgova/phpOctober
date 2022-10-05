<?php

function debug ($info, $is_die = false)
{
    echo '<pre>' . print_r($info, true) . '</pre>';
    if ($is_die){
        die();
    }
}
function change($param)
{
    $param = 'жопа';
}