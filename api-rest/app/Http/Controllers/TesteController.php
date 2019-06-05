<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        $pspell_link = pspell_new("en");

        if (!pspell_check($pspell_link, "testt")) {
            $suggestions = pspell_suggest($pspell_link, "testt");
            
            foreach ($suggestions as $suggestion) {
                echo "Possible spelling: $suggestion<br />";
            }
        }
    }
}
