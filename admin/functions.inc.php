<?php
function pr($arr)
{
    echo "<pre>";
    echo $arr;
}
function prx($arr)
{
    echo "<pre>";
    echo $arr;
    die();
}

function getSafeValues($con, $str)
{
    if ($str !== "") {
        return mysqli_real_escape_string($con, $str);
    }
}
