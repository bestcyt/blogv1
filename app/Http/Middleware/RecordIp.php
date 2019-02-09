<?php

namespace App\Http\Middleware;

use App\Models\viewLog;
use Closure;

class RecordIp
{
    public $viewlog;

    public function __construct(viewLog $viewLog)
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

        $this->viewlog->insert([
            'ip'=>$request->server('REMOTE_ADDR'),
            'type'=>1,
            'info'=>$request->path()
        ]);
        return $next($request);
    }
}
