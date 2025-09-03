<?php

namespace App\Http\Middleware;

use App\Services\UserService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware {
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function handle(Request $request, Closure $next, int $roleId): Response {
        $user = $this->userService->getUserLoggedData();

          if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (!in_array(auth()->user()->role, $roles)) {
            abort(403); // atau redirect()->route('home')
        }

        return $next($request);
    }
    
}
