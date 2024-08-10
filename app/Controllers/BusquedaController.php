<?php namespace App\Controllers;

class BusquedaController extends BaseController
{
    public function index()
    {
        $search_query = $this->request->getGet('q');

        $data = [
            'search_query' => $search_query
        ];

        return view('resultados_busqueda', $data);
    }
}
