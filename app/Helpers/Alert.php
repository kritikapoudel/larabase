<?php
namespace App\Helpers;

class Alert
{
    public static function SetSuccessMessage(string $message)
    {
        session()->flash("message:success",$message);
    }
    public static function SetErrorMessage(string $message)
    {
        session()->flash("message:Error",$message);
    }
    public static function SetInfoMessage(string $message)
    {
        session()->flash("message:Info",$message);
    }
}

