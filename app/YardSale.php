<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YardSale extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'yard_sales';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'address',
        'city',
        'zip',
        'privacy',
        'type_of_sale',
        'start_date',
        'end_date',
        'payment_types_accepted',
        'display_on_map',
        'description',
        'time',
    ];
}
