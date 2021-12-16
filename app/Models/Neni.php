<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ChemsType;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Neni extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'nenis';
    public $timestamps = false;
    protected $fillable = ['name'
        , 'image',
        'main_activity',
        'neni_day', 'chems_type_id'
    ];


    public function chems_type(): BelongsTo
    {
        return $this->belongsTo(ChemsType::class);
    }
}
