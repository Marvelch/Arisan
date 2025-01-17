<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */

     /**
      * Change Lane Base To Custome
      * Date 24/06/2020
      * Mengubah tampilan halaman ke 404 Custome Page
      */

    // public function render($request, Throwable $exception)
    // {
    //     return parent::render($request, $exception);
    // }

    /**
     * Hasil perubahan menggunakan custome page 404 laravel
     */

    public function render($request, Throwable $e)
    {
        if($this->isHttpException($e))
        {
            $code = $e->getStatusCode();
            if($code=='404')
            {
                return response()->view('404');
            }
        }
        return parent::render($request, $e);
    }
}
