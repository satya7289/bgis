<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        
        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
    {
            return $next($request);
        }

        if ($request->is('admin/contact*'))//If user is creating a post
         {
            if (!Auth::user()->hasPermissionTo('Contact'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }


        if ($request->is('admin/events*')) //If user is editing a post
         {
            if (!Auth::user()->hasPermissionTo('News')) 
            {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->is('admin/publications*')) //If user is editing a post
         {
            if (!Auth::user()->hasPermissionTo('Publications')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->is('admin/dates*')) //If user is editing a post
        {
           if (!Auth::user()->hasPermissionTo('Dates')) 
           {
               abort('401');
           } else {

               return $next($request);
           }
       }

       if ($request->is('admin/faculty*')) //If user is editing a post
        {
           if (!Auth::user()->hasPermissionTo('Faculty')) {
               abort('401');
           } else {
               return $next($request);
           }
       }

       if ($request->is('admin/tickets*')) //If user is editing a post
        {
           if (!Auth::user()->hasPermissionTo('Edit Ticket')) {
               abort('401');
           } else {
               return $next($request);
           }
       }

       if ($request->is('admin/donations/*')) //If user is editing a post
        {
           if (!Auth::user()->hasPermissionTo('View Full Donations')) {
               abort('401');
           } else {
               return $next($request);
           }
       }

        return $next($request);
    }
}