<?php

namespace App\Http\Controllers\Hako;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        return 'Hello';
    }
    public function showId($id)
    {
        return "Hello {$id}";
    }
}
