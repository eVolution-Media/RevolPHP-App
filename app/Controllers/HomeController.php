<?php
namespace App\Controllers;

use EvolutionMedia\RevolPHP\Request;

class HomeController extends \EvolutionMedia\RevolPHP\Controllers\Controller {
    public function test(Request $req)
    {
        echo 'Waddup';
    }
}