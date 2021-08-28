<?php

function activeRoute($route, $isClass = false): string
{
    $requestUrl = request()->is($route);
    
    if($isClass) {
        return $requestUrl ? $isClass : '';
    } else {
        return $requestUrl ? 'active' : '';
    }
}

/**
 * route('dashboard.1') for url condition
 * 'dashboard.1' for getName condition
 */
function activeRouteName($route, $isClass = false): string
{ 
    // $requestUrl = request()->url() === $route
    $requestUrl = request()->route()->getName() ===  $route;
    if ($isClass) {
        return $requestUrl ? $isClass : '';
    } else {
        return $requestUrl ? 'active' : '';
    }
}
