<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formA(Request $request)
    {
        if ($request->has('e-mail')) {
            $date = date_create();
            $file_name = "form_a/" . date_format($date, 'YmdHis.u') . ".txt";
            $f = fopen($file_name, "w");
            fwrite($f, $request->get('e-mail') . "\n");
            fwrite($f, $request->get('comments'));
            fclose($f);
        }
        return view('forms');
    }

    public function formB(Request $request)
    {
        if ($request->has('e-mail')) {
            $date = date_create();
            $file_name = "form_b/" . date_format($date, 'YmdHis.u') . ".txt";
//            $file_name = date_format($date, 'YmdHis.u') . ".txt".public_path('farm_a');
            $f = fopen($file_name, "w");
            fwrite($f, $request->get('name') . "\n");
            fwrite($f, $request->get('tel') . "\n");
            fwrite($f, $request->get('e-mail') . "\n");
            fwrite($f, $request->get('comments'));
            fclose($f);
        }
        return view('formB');
    }

}
