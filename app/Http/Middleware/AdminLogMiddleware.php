<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Helpers\AdminLogger;

class AdminLogMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->is('admin/*')) {
            AdminLogger::log(
                'info',
                'دسترسی به مسیر ادمین',
                [
                    'url' => $request->fullUrl(),
                    'method' => $request->method(),
                    'input' => $request->all(),
                    'ip' => $this->getClientIp(),   // استفاده از IP واقعی
                ]
            );
        }

        return $response;
    }

    private function getClientIp()
    {
        $ip = request()->ip();
        $headers = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED'
        ];

        foreach ($headers as $header) {
            if (!empty($_SERVER[$header])) {
                $ips = explode(',', $_SERVER[$header]);
                foreach ($ips as $i) {
                    $i = trim($i);
                    if (filter_var($i, FILTER_VALIDATE_IP)) {
                        return $i;
                    }
                }
            }
        }

        return $ip;
    }
}
