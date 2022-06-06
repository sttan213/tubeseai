<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assistance_requests';

    protected $fillable = [
        'title',
        'description',
        'client_slug',
        'category_id',
        'product_id',
        'capture_method_id',
        'dev_id',
        'request_by',
        'assign_to',
        'status',
    ];
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
