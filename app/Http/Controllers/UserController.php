<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UserController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    // Xử lý đăng ký người dùng
    public function register(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'required|in:admin,user',
            'department' => 'required|in:BGD,PT2,PT3,PT4,HCNS,PT6,IT',
        ]);
        // Tạo người dùng mới
        $user = User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $request->hasFile('avatar') ? $request->file('avatar')->store('avatars', 'public') : null,
            'role' => $request->role,
            'department' => $request->department,
        ]);
        // Đăng nhập người dùng sau khi đăng ký (tùy chọn)

        // Chuyển hướng đến trang chủ hoặc trang mong muốn với thông báo thành công
        return redirect('/')->with('success', 'Đăng ký thành công!');
    }
}
