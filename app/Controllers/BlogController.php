<?php
namespace App\Controllers;

class BlogController 
{

    public function index()
    {
        echo "Bonjour je suis la page d'accueil...et Bienvenu à vous les Gadara de la programmation";
    }

    public function show($id)
    {
        echo "Je suis Slime Ndema M 'Daddypro21' ,Aimez la page AWA tech ,<br>abonnez vous aussi à ma chaine
        Youtube Daddypro$id pour plus ";
    }
}