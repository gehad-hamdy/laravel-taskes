<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;
use App\Http\Resources\Components as ComponentsResource;

class ComponentsController extends Controller
{

    /**
     * @param $id
     * @param int $quantity
     * @return ComponentsResource
     * @throws \Exception
     */
    public function show($id, $quantity = 1)
    {
        $components = Component::Query()->find($id);

        if ($components['quantity'] > $quantity) {
            return new ComponentsResource($components);
        }

        throw new \UnexpectedValueException("this quantity not available in our store, the max quantity is");

     //   return response("this quantity not available in our store, the max quantity is ", 204);
    }

}
