<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MenuItem as MenuItemResource;
use App\MenuItem;


class MenuItemController extends Controller
{
    public function show($id)
    {
        return new MenuItemResource(MenuItem::find($id));
    }

    public function index()
    {
        $data = new MenuItem();

        return $data->all()->toArray();
    }
}
