<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function confirm(Request $request)
    {
        //return view('confirm', ['index' => 'false']);


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body'  => 'required',
        ]);


        $inputs = $request->all();


        return view('confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'body'  => 'required'
        ]);
        $inputs = $request->all();


        $action = $request->input('action');
        if ($action !== 'submit') {
            return redirect()
                ->route('contact')
                ->withInput($inputs);
        } else {
            $userBuilder = DB::table('t_inquiry');
            $userBuilder->insert([
                'name'  => $inputs["name"],
                'email'   => $inputs["email"],
                'body' => $inputs["body"],
                'del_flg' => 0,
            ]);

            return  view('thanks', ['index' => 'false']);
        }
    }
}
