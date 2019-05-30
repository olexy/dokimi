<?php

namespace dokimi\Policies;

use dokimi\User;
use dokimi\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the customer.
     *
     * @param  \dokimi\User  $user
     * @param  \dokimi\Customer  $customer
     * @return mixed
     */
    public function view(User $user, Customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can create customers.
     *
     * @param  \dokimi\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->email, [
            'rau.makenzie@example.com',
        ]);
    }

    /**
     * Determine whether the user can update the customer.
     *
     * @param  \dokimi\User  $user
     * @param  \dokimi\Customer  $customer
     * @return mixed
     */
    public function update(User $user, Customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can delete the customer.
     *
     * @param  \dokimi\User  $user
     * @param  \dokimi\Customer  $customer
     * @return mixed
     */
    public function delete(User $user, Customer $customer)
    {
        return in_array($user->email, [
            'eveum@example.net',
            'rau.makenzie@example.com',
        ]);
    }

    /**
     * Determine whether the user can restore the customer.
     *
     * @param  \dokimi\User  $user
     * @param  \dokimi\Customer  $customer
     * @return mixed
     */
    public function restore(User $user, Customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the customer.
     *
     * @param  \dokimi\User  $user
     * @param  \dokimi\Customer  $customer
     * @return mixed
     */
    public function forceDelete(User $user, Customer $customer)
    {
        //
    }
}
