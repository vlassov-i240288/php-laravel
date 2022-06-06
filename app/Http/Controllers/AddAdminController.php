<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddAdminController extends Controller
{
    public function addAdmin($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.index');
    }
//    public function addAdmin($id)
//    {
//        User::where('id', $id)->delete();
//        return redirect()->route('admin.index');
//    }
}
