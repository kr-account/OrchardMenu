<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Items extends Model
{
    //
    protected $table = 'menu_items';

    public function top_level()
    {
       return $this->belongsTo('App\Top_Level');
    }
}
