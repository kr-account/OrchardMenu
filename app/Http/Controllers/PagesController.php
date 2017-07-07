<?php
/**
 *  * Created by PhpStorm.
 * User: Krishna Rao
 * Date: 6/7/17
 * Time: 3:06 PM
 */

namespace App\Http\Controllers;

use App\Menu_Items;
use Illuminate\Http\Request;
use App\Top_Level;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->data['route_id'] = '';
        $this->data['top_level'] = Top_Level::all();
    }

	public function route1() {
        $this->data['route_id'] = 'route1';
		$this->data['image'] = Menu_Items::where('route_id', $this->data['route_id'])->first()->top_level->image;
        return view('route1')->with($this->data);
	}

    public function route2() {
        $this->data['route_id'] = 'route2';
        $this->data['image'] = Menu_Items::where('route_id', $this->data['route_id'])->first()->top_level->image;
        return view('route2')->with($this->data);
    }

	public function route3() {
        $this->data['route_id'] = 'route3';
        $this->data['image'] = Menu_Items::where('route_id', $this->data['route_id'])->first()->top_level->image;
		return view('route3')->with($this->data);
	}

    public function route4() {
        $this->data['route_id'] = 'route4';
        $this->data['image'] = Menu_Items::where('route_id', $this->data['route_id'])->first()->top_level->image;
        return view('route4')->with($this->data);
    }

    public function home() {
        return view('home');
    }

    public function update($id, $menu) {
        DB::table('menu_items')->whereId($menu)->update(['top_level_id' => $id] );
        return "Success";
    }
}