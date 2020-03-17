<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class ProductsByState extends Model
{
    protected $table = 'ap_states';   
    public function getAverage(){
        return DB::table('ap_copi')->selectRaw('avg(steak) as steak,  avg(grnd_beef) as grnd_beef, avg(sausage) as sausage, 
        avg(fry_chick) as fry_chick, avg(tuna) as tuna, avg(hgal_milk) as hgal_milk,  avg(dozen_eggs) as dozen_eggs, 
        avg(margarine) as margarine, avg(parmesan) as parmesan, avg(potatoes) as potatoes, avg(bananas) as bananas, avg(lettuce) as lettuce, 
        avg(bread) as bread, avg(orange_juice) as orange_juice, avg(coffee) as coffee, avg(sugar) as sugar, avg(cereal) as cereal, 
        avg(sweet_peas) as sweet_peas, avg(cooking_oil) as cooking_oil, avg(frozn_meal) as frozn_meal, 
        avg(frozn_corn) as frozn_corn,   avg(potato_chips) as potato_chips,  avg(coke) as coke,   avg(hmbgr_sand) as hmbgr_sand,  
        avg(pizza) as pizza,  avg(2_pc_chick) as 2_pc_chick,  avg(beer) as beer, avg(wine) as wine
        ')->where('state_id', '=', $this->id)->get();
    }
}