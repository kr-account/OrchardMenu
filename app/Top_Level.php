<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Top_Level extends Model
{
    protected $table = 'top_level';

    public function menu_items() {
        return $this->hasMany('App\Menu_Items', 'top_level_id', 'id' );
    }
}
