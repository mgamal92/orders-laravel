<?php

namespace MG\Order\Models;

use Illuminate\Database\Eloquent\Model as ModelAlias;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(int $int)
 */
class Order extends ModelAlias
{
    protected $fillable = [
        'id',
        'user_id',
        'total',
        'status',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
