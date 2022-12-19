<?php

namespace MG\Order;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use MG\Order\Models\Order as OrderModel;

class Order
{
    public function create(): Model
    {
        return new OrderModel();
    }

    public function update(): Model
    {
        return OrderModel::find(1);
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
