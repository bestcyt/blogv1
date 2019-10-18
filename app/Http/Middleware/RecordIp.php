<?php

namespace App\Http\Middleware;

use App\Models\ViewLogs;
use Closure;

class RecordIp
{
    public $viewlog;

    public function __construct(ViewLogs $viewLog)
    {
        $this->viewlog = $viewLog;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {
//        $this->viewlog->insert([
//            'ip'=>$request->server('REMOTE_ADDR'),
//            'type'=>1,
//            'info'=>$request->path(),
//            'created_at'=>date('Y-m-d H:m:s',time()),
//            'updated_at'=>date('Y-m-d H:m:s',time()),
//        ]);
        return $next($request);
    }
}
