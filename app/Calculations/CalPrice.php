<?php
/**
 * Created by PhpStorm.
 * User: Gehad
 * Date: 2/1/2018
 * Time: 11:58 AM
 */

namespace App\Calculations;


class CalPrice
{

    public function getPrice($id){
      return  \App\Component::query()->where('id', '=', $id)->pluck('price');
    }
}