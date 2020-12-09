<?php

namespace App\Services;

use Throwable;
use App\Services\Responses\ServiceResponse;
use App\Repositories\Contracts\ContactRepository;
use App\Services\Contracts\ContactServiceInterface;

class ContactService extends BaseService implements ContactServiceInterface
{
    /**
     * @var ContactRepository
     */
    private $contactEmailRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactEmailRepository = $contactRepository;
    }

    /**
     * Busca todos os contatos (incluindo telefones e e-mails)
     * de um usuário baseado no seu id.
     * ___
     * @param integer $userId
     *
     * @return ServiceResponse
     */
    public function getAllByUserId(int $userId): ServiceResponse
    {
        try {
            $result = $this->contactEmailRepository->where([
                'id_user' => $userId,
            ])
                ->orderBy('name', 'asc')
                ->get();

            return new ServiceResponse(true, 'Contatos retornados', $result);
        } catch (Throwable $e) {
            return $this->defaultErrorReturn($e);
        }
    }
}
