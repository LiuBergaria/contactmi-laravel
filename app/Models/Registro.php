<?php

namespace App\Models;

use Throwable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $guarded = [
        'id'
    ];

    public static function boot()
    {
        static::saving(function () {
            if (config('app.env') === 'testing') {
                return false;
            }
        });
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_user', 'id');
    }

    public function setDataAttribute($data)
    {
        $this->attributes['data'] = is_array($data) ? json_encode($data) : $data;
    }

    public function getDataAttribute($data)
    {
        return json_decode($data, true) ?: $data;
    }

    /**
     * Função para abstrair log.
     *
     * @param string       $title
     * @param string       $action
     * @param string       $key
     * @param string|array $data
     * @param Throwable    $e
     *
     * @return Registro
     */
    public static function make(
        string $title,
        string $action,
        string $key = null,
        string $data = null,
        Throwable $e = null
    ) {
        $idUser = !is_null(Auth::user()) ? Auth::user()->id : null;

        if ($e) {
            $errorLog = self::beautifyException($e);
            $data = is_array($data) ? $data : [$data];
            $data = array_merge($data, compact('errorLog'));
        }

        $registro = new self();
        $registro->fill([
            'id_user' => $idUser,
            'title' => $title,
            'data' => $data,
            'action' => $action,
            'key' => $key,
        ]);

        $registro->save();

        return $registro;
    }

    private static function beautifyException(Throwable $e): array
    {
        return [
            'msg' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile()
        ];
    }
}
