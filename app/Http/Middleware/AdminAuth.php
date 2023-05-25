<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session::has('auth_check_admin')) {
            // Người dùng chưa đăng nhập, thực hiện xử lý tại đây
            return redirect()->route('admin.login'); // Chuyển hướng đến trang đăng nhập
        }

        // Người dùng đã đăng nhập, cho phép tiếp tục xử lý request
        return $next($request);
    }
}