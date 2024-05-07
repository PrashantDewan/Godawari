<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulkEmailController extends Controller
{
    public function index()
    {
        return view('admin.email.index');
    }

    public function send(Request $request)
    {
        $request->validate(
            [
                'subject'=>['required'],
                'content'=>['required'],
            ]
        );

    }
}
