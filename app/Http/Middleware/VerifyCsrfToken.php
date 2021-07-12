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
        '/add_like',
        '/remove_like',
        '/add_comment',
        '/comments',
        '/num_comments',
        '/search',
        'view_likes'
    ];
}
