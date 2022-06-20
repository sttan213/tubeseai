<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ops_maintenances';

    protected $fillable = [
        'tgl_mtc',
        'no_mtc',
        'client_slug',
        'wajib_pajak_id',
        'dev_id',
        'kondisi_awal',
        'penanganan',
        'status_akhir',
        'created_by',
    ];

    public function wajibPajak()
    {
        return $this->belongsTo(WajibPajak::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
