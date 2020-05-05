<?php

namespace App\Exceptions;

use App\Http\Controllers\testController;
use App\Traits\ApiResponser;
use Exception;
use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    use ApiResponser;

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
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {

        //Para activar las notificaciones de sentry
        if (app()->bound('sentry') && $this->shouldReport($exception)) {
            app('sentry')->captureException($exception);
        }


        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */



    public function render($request, Exception $exception) 
    {


        if ($exception instanceof ModelNotFoundException) { //Si la excepcion no encuentra el modelo (cuando busca un id que no existe)
            $modelo = strtolower(class_basename($exception->getModel()));
            return $this->errorResponse("No existe ninguna instancia o coleccion de datos para el parametro indicado", 404);
        }



        if ($exception instanceof NotFoundHttpException) { //Si escribio una URL errada
            return $this->errorResponse("No se encontro la URL especificada", 404);
        }        
       

        if ($exception instanceof MethodNotAllowedHttpException) { //Si la ruta corresponde al verbo get por ejemplo pero le envio el verbo post
            return $this->errorResponse("Metodo no permitido para la ruta expecificada", 405);
        }

        if ($exception instanceof HttpException) { //Si hay cualquier otra excepcion que no este dentro de los if de arriba 
            return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
        }


        // return $exception;
        // return $this->errorResponse("Falla inesperada. Intente luego.", 500);

        //Si estamos en modo desarrollo muestra descripcion del error, sino, solo un mensaje
        if (config('app.debug')) { 
            return parent::render($request, $exception);
        }else{ //Produccion
            return $this->errorResponse("Falla inesperada. Intente luego.", 500);
        }

    }







    //Creado por mi
    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors = $e->validator->errors()->getMessages();
        // dd($errors);
        // if ($this->isFrontend($request)) 
        // {
        //     return $request->ajax() ? response()->json($errors,422)  : redirect()->back()->withInput($request->input())->withErrors($errors);
        // }
        // dd("s");

        return $this->errorResponse($errors, 422);

    }



}
