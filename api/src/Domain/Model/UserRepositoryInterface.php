<?php


namespace App\Domain\Model;


/**
 * Interface UserRepositoryInterface
 * @package App\Domain\Model\User
 */
interface UserRepositoryInterface
{
    /**
     * @param int $id
     * @return User
     */
    public function findById(int $id) : User;

    /**
     * @return array|User[]
     */
    public function getAll() : array;

    /**
     * @param User $user
     */
    public function save(User $user): void;

    /**
     * @param User $user
     */
    public function delete(User $user): void;

}