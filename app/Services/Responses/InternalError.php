<?php

namespace App\Services\Responses;

class InternalError
{
    /**
     * Código interno do erro
     * @var int|null
     */
    public $code;

    /**
     * Código do log gerado
     * @var string|null
     */
    public $log;

    /**
     * Mensagem de retorno com tradução
     * @var string
     */
    public $message;

    /**
     * @param string      $message
     * @param int|null    $code
     * @param string|null $log
     */
    public function __construct(
        string $message,
        int $code = null,
        string $log = null
    ) {
        $this->message = $message;
        $this->code = $code;
        $this->log = $log;
    }

    /**
     * Retorna os parametros dessa classe em array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'code'     => $this->code,
            'log'      => $this->log,
            'message'  => $this->message
        ];
    }
}
