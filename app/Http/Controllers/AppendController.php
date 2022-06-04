<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AppendController extends Controller
{
    public function append()
    
    {
        $string="Hello world \n";
        Storage::append('append/myfile.txt', $string, null);
        

        $str="Hello2 \n";
        Storage::prepend('append/myfile.txt', $str, null);

        // $file= fopen("append/myfile.txt", "a");
        // fwrite($file, "Hello World2 \n");
        // fclose($file);

        return view('append.index');
    }
}
