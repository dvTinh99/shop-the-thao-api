<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KhachHangController extends Controller {

    function forgotPassword(Request $request) {
        $email = $request->email ?? null;
        $newPass = $request->newPass;

        $khachHang = KhachHang::where('email', $email)->first();
        if ($khachHang) {
            $khachHang->matKhau = $newPass;
            $khachHang->save();

            return response()->json([
                "success" => true,
                "message" => "Đổi thành công"
            ]);
        }

        return response()->json([
            "success" => false,
            "message" => "user không tồn tại"
        ]);

    }
}


?>