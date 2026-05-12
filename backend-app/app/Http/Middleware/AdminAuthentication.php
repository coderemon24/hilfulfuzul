<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = auth()->guard('admin');
        $isLoginPage = $request->is('admin/login') || $request->is('admin/login*');

        if($admin->check())
        {
            if ($isLoginPage) {
                return redirect()->route('admin.index');
            }
        } else {
            if (!$isLoginPage) {
                return redirect()->route('admin.login');
            }
        }

        return $next($request);
    }
}
