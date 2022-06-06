<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spk';

    protected $fillable = [
        'kd_prov',
        'kd_kota',
        'client_slug',
        'project_year',
        'batch',
        'device_quantity',
        'project_name',
        'vendor',
        'instansi',
        'funded_by',
        'spk_no',
        'pks_no',
        'pks_date',
        'bast_date',
        'metode',
        'price_unit',
        'price_total',
        'duration',
        'stage',
    ];

}
