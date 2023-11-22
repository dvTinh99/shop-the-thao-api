<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller {
    
    function forgotPassword(Request $request) {
        $tenDn = $request->userName ?? null;
        $newPass = $request->newPass ?? "123123";

        if ($tenDn) {
            $account = Admin::where('ten_dn', $tenDn)->first();
            $account->matKhau = $newPass;
            $account->save();
        }
    }
}


?>