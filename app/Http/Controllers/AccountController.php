<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Account;

class AccountController extends Controller
{
    public function index(){
        
    }

    public function update(Request $request){
        $account = Account::findOrFail(session('account')->id);
        if($account){
            $account->name = $request->input('name');
            $account->email = $request->input('email');
            if($request->input('password') != ''){
                $account->password = bcrypt($request->input('password'));
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = Str::slug($account->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/user/'), $file_name);
            
                if ($account->photo && File::exists(public_path($account->photo))) {
                    File::delete(public_path($account->photo));
                }
            
                $account->photo = 'assets/user/'.$file_name;
            }
            $account->address = $request->input('address');
            $account->district = $request->input('district');
            $account->province = $request->input('province');
            $account->phone_number = $request->input('phone_number');
            $account->save();
            session(['account' => $account]);
            return redirect()->back()->with('success', 'Edit account information successfully!');
        }
        return redirect()->back()->with('error', 'Edit account information failed!');
    }
}