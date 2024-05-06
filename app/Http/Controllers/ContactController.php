<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'subject' => ['required'],
                'message' => ['required'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $contactObj = new Contact();

            $contactObj->name = Str::title($request->input('name'));
            $contactObj->email = $request->input('email');
            $contactObj->subject = $request->input('subject');
            $contactObj->message = $request->input('message');

            $res = $contactObj->save();

            DB::commit();
            if($res){
                return redirect()->back()->with('message', 'Message Send Successfully');
            }
        } catch (\Exception $e) {
            DB::rollback();
            info($e);
        }
    }
}
