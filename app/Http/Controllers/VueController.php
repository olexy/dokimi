<?php

namespace dokimi\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'name' => 'John Smith',
        ];
    }

}
