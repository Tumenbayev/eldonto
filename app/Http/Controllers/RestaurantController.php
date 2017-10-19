<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Restaurant as RestaurantResource;
use App\Restaurant;


class RestaurantController extends Controller
{
    public function show($id)
    {
        return new RestaurantResource(Restaurant::find($id));
    }

    public function index()
    {
        $data = new Restaurant();

        return $data->all()->toArray();
    }
}
