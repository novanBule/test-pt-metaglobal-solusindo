<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novan_MasterCategoryBarang extends Model
{
    protected $guarded = ['id'];

    public function category() {
        return $this->hasMany(Novan_MasterBarang::class);
    }

}
