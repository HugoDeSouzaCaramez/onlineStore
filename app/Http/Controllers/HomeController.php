<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre nós - Loja Online Ficitícia";
        $viewData["subtitle"] = "Sobre nós";
        $viewData["description"] = "Esta é uma pagina Sobre nós";
        $viewData["author"] = "Desenvolvido por: Hugo de Souza Caramez";
        return view('home.about')->with("viewData", $viewData);
    }
}