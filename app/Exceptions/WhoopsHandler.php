<?php

namespace App\Exceptions;

use App\Exceptions\Handler as BaseExceptionHandler;
use Exception;
use Illuminate\Http\Response;
use Whoops\Handler\JsonResponseHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsHandler extends BaseExceptionHandler
{
    /**
     * Render an exception into a response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception               $e
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        $whoops = new Run;

        if ($request->ajax()) {
            $whoops->pushHandler(new JsonResponseHandler());
        } else {
            $whoops->pushHandler(new PrettyPageHandler());
        }

        return new Response($whoops->handleException($e), $e->getStatusCode(), $e->getHeaders());
    }
}
