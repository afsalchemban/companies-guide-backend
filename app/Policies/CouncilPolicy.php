<?php

namespace App\Policies;

use App\Models\Council;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CouncilPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Council $council)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Council $council)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Council $council)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Council $council)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Council $council)
    {
        //
    }

    public function changeImageFile(User $user, Council $council)
    {
        $userable = $user->userable;
        return $user->isCouncil() && $council->id == $userable->id;
    }
    public function addEvent(User $user, Council $council)
    {
        $userable = $user->userable;
        return $user->isCouncil() && $council->id == $userable->id;
    }
}
