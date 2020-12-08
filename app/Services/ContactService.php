<?php

namespace App\Services;

use App\Services\Contracts\ContactServiceInterface;
use App\Repositories\Contracts\ContactRepository;

class ContactService implements ContactServiceInterface
{
    /**
     * @var ContactRepository
     */
    private $repository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->repository = $contactRepository;
    }

    /**
     * Busca todos os contatos (incluindo telefones e e-mails)
     * de um usuário baseado no seu id.
     * ___
     * @param integer $userId
     *
     * @return array<App\Contact>
     */
    public function getAllByUserId(int $userId)
    {
        return $this->repository->where([
            'id_user' => $userId,
        ])
            ->orderBy('name', 'asc')
            ->get();
    }
}
