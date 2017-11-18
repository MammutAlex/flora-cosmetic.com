<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 08.08.17
 * Time: 12:02
 */

use Illuminate\Support\Facades\Route;

/**
 * Detect Active Route
 *
 * Compare given route with current route and return output if they match.
 * Very useful for navigation, marking if the link is active.
 *
 * @param $route
 * @param string $output
 * @param string $falseOutput
 * @return string
 */
function isActiveRoute(string $route, string $output = "active", string $falseOutput = "")
{
    return (Route::currentRouteName() == $route) ? $output : $falseOutput;
}

/**
 * Detect Active Routes
 *
 * Compare given routes with current route and return output if they match.
 * Very useful for navigation, marking if the link is active.
 *
 * @param array $routes
 * @param string $output
 * @param string $falseOutput
 * @return string
 */
function areActiveRoutes(Array $routes, string $output = "active", string $falseOutput = "")
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
    return $falseOutput;
}