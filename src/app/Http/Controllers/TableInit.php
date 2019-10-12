<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Init;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableInit extends Controller
{
    use Init;

    protected $tableClass = ExampleTable::class;
}