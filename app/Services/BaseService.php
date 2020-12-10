<?php

namespace App\Services;

use Throwable;
use App\Models\Registro;
use Illuminate\Support\Str;
use App\Services\Responses\ServiceResponse;

class BaseService
{
    /**
     * Retorno de erro padrão
     *
     * @param Throwable     $e
     * @param string        $action
     * @param string|array  $data
     * @param string        $key
     *
     * @return array
     */
    protected function defaultErrorReturn(
        Throwable $e,
        $data = null,
        $key = null
    ): ServiceResponse {
        $explodedClass = explode('\\', get_called_class());
        $className = end($explodedClass);
        $title = strtoupper(str_replace('Service', '', $className));

        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $function = $trace[count($trace) - 1]['function'];
        $action = strtoupper(Str::snake($function)) . '_ERROR';

        $registro = Registro::make(
            $title,
            $action,
            $key,
            $data,
            $e
        );

        return new ServiceResponse(
            false,
            'Ocorreu um erro inesperado. Tente novamente ou entre em contato com nosso suporte',
            $data,
            $registro->id
        );
    }
}
