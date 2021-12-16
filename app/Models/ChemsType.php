<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ChemsType extends Model
{
    use HasFactory;

    protected $fillable = ['name'
        , 'description'];
    public $timestamps = false;

    public function Neni(): HasMany
    {
        return $this->hasMany(Neni::class);
    }
}
