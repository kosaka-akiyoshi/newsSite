<?php
//4/24 UserController追加

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the favorite.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function favorite()
    {
        return view('user.favorite');
    }
}
