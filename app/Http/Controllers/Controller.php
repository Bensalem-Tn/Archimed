<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public static function UplodFile($filename)
    {
        $path = public_path() . '/../uploads/';

        if (isset($_FILES[$filename])) {
            $originalName = $_FILES[$filename]['name'];
            $ext = '.' . pathinfo($originalName, PATHINFO_EXTENSION);
            $generatedName = md5($_FILES[$filename]['tmp_name']) . $ext;
            $filePath = $path . $generatedName;
            if (!is_writable($path)) {
                return false;
            }
            if (move_uploaded_file($_FILES[$filename]['tmp_name'], $filePath)) {
                return $generatedName;
            }
        } else {
            return false;
        }
    }
}
