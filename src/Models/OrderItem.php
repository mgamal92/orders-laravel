<?php

namespace MG\Order\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static find(int $int)
 */
class OrderItem extends Model
{
    protected $fillable = [
        'id',
        'order_id',
        'item_type',
        'item_id',
        'quantity',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}