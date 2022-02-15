<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novan_MasterBarang extends Model
{
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Novan_MasterCategoryBarang::class);
    }
}
