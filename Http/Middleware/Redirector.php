<?php

namespace App\Twill\Capsules\Redirections\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Twill\Capsules\Redirections\Models\Redirection;

class Redirector
{
    public function handle(Request $request, Closure $next)
    {
        return filled($redirection = $this->makeRedirection($request))
            ? redirect($redirection->to, $redirection->status_code)
            : $next($request);
    }

    private function makeRedirection(Request $request): Redirection|null
    {
        if ($request->method() !== 'GET') {
            return null;
        }

        return $this->find($request);
    }

    private function find(Request $request): Redirection|null
    {
        $from = rtrim($request->getUri(), '/');

        return Redirection::where('from', '=', $from)
            ->where('published', true)
            ->first();
    }
}
