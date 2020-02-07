<?php

namespace App\Policies;

use App\Aula;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AulaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any aulas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the aula.
     *
     * @param  \App\User  $user
     * @param  \App\Aula  $aula
     * @return mixed
     */
    public function view(User $user, Aula $aula)
    {
        return true;
    }

    /**
     * Determine whether the user can create aulas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //solo superadmin y coordinador del centro
        return $user->isSuperAdmin()
        ? Response::allow()
        : Response::deny('No tienes derecho a crear aulas');
    }

    /**
     * Determine whether the user can update the aula.
     *
     * @param  \App\User  $user
     * @param  \App\Aula  $aula
     * @return mixed
     */
    public function update(User $user, Aula $aula)
    {
        //
    }

    /**
     * Determine whether the user can delete the aula.
     *
     * @param  \App\User  $user
     * @param  \App\Aula  $aula
     * @return mixed
     */
    public function delete(User $user, Aula $aula)
    {
        //
    }

    /**
     * Determine whether the user can restore the aula.
     *
     * @param  \App\User  $user
     * @param  \App\Aula  $aula
     * @return mixed
     */
    public function restore(User $user, Aula $aula)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the aula.
     *
     * @param  \App\User  $user
     * @param  \App\Aula  $aula
     * @return mixed
     */
    public function forceDelete(User $user, Aula $aula)
    {
        //
    }

    /*public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }*/
}
