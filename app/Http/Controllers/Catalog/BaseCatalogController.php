<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseCatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }
}
