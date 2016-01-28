<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class LocaisController extends Controller
{
    /**
     * @Get("/locais/teste", as="locais.teste")
     */
    public function getTeste()
    {
        $rand = function () {
            return rand(-10, 10) * 0.004;
        };

        $local = function ($k) use ($rand) {

            return [
                'icone'     => str_pad(rand(1, 9), 2, 0, STR_PAD_LEFT),
                'nome'      => "Teste #{$k}",
                'descricao' => "<p>Teste teste teste teste teste teste teste teste</p>",
                'lat'       => 41.154 + $rand(),
                'lon'       => -73.328 + $rand(),
            ];
        };

        $locais = [];

        foreach (range(1, 50) as $k) {
            $locais[] = $local($k);
        }

        return $locais;
    }
}
