<?php
namespace App\Controllers;

use App\Requests\TestRequest;
use EvolutionMedia\RevolPHP\Request;

class HomeController extends \EvolutionMedia\RevolPHP\Controllers\Controller {
    public function test(TestRequest $req)
    {
        echo 'Waddup';
    }
}