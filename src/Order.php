<?php

namespace MG\Order;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Order
{
    public function create(): Model
    {
        // return
    }

    public function update(): Model
    {

    }

    /**
     * Get all orders for a user.
     *
     * @param Model $user
     * @return Collection
     */
    public function withUser(Model $user): Collection
    {
        return collect();
    }

    /**
     * Get all orders between dates interval.
     * @param ...$dates
     * @return Collection
     */
    public function betweenDates(...$dates): Collection
    {
        return collect();
    }
}