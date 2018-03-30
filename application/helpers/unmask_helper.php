<?php
/**
 * Created by PhpStorm.
 * User: micael
 * Date: 30/03/18
 * Time: 13:59
 */

defined('BASEPATH') OR exit('No direct script access allowed');

function unmaskZipCode($val)
{
    $val = trim($val);
    $val = str_replace(".", "", $val);
    $val = str_replace("-", "", $val);
    return $val;
}

function unmaskphone($val)
{
    $val = trim($val);
    $val = str_replace("(", "", $val);
    $val = str_replace(")", "", $val);
    $val = str_replace("-", "", $val);
    return $val;
}

function unmaskCnpj($val)
{
    $val = trim($val);
    $val = str_replace(".", "", $val);
    $val = str_replace("-", "", $val);
    $val = str_replace("/", "", $val);
    return $val;
}
