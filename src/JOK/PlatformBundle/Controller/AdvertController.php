<?php

// src/JOK/PlatformBundle/Controller/AdvertController.php

namespace JOK\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        // On veut avoir l'URL de l'annonce d'id 5.
        $url = $this->get('router')->generate(
            'jok_platform_view', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
            );
        // $url vaut « /platform/advert/5 »
        
        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }

    public function viewAction($id, Request $request)
    {
        $tag = $request->query->get('tag');

        return new Response("Affichage de l'annonce d'id : ".$id." avec le tag : ".$tag);
    }

    public function viewSlugAction($fileName, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            fileName '".$fileName."', créée en ".$year." et au format ".$_format."."
            );
    }

    public function addAction()
    {

    }

    public function editAction()
    {
        
    }

    public function deleteAction()
    {
        
    }
}