<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{


    //    store subscribe email
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:subscribes',
        ]);
        DB::beginTransaction();
        try {
            $subscriber = new Subscribe();
            $subscriber->email = $request->email;
            $subscriber->save();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
        DB::commit();
        return redirect()->back();
    }

}