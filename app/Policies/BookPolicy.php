<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BookPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): Response
    {
        return $user->role !== 'editor' ? Response::allow() : Response::deny('Anda tidak memiliki akses', 401);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        return $user->role !== 'viewer' ? Response::allow() : Response::deny('Anda tidak memiliki akses', 401);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Book $book): Response
    {
        return $user->role !== 'viewer' ? Response::allow() : Response::deny('Anda tidak memiliki akses', 401);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Book $book): Response
    {
        return $user->role === 'admin' ? Response::allow() : Response::deny('Anda tidak memiliki akses', 401) ;
    }
}
