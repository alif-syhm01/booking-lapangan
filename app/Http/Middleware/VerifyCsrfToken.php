<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'field/add-field',
        'field/edit-field/*',
        'field/delete-field/*',
        'rate/add-rate',
        'rate/edit-rate/*',
        'rate/delete-rate/*',
    ];
}
