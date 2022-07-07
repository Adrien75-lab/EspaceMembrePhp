<?php

require_once("./controllers/MainController.controller.php");
require_once("./models/Visiteur/Visiteur.model.php");

class VisiteurControlleur extends MainController
{
    private $visiteurManager;

    public function __construct()
    {
        $this->visiteurManager = new VisiteurManager();
    }
    public function accueil()
    {

        // Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function login()
    {
        $data_page = [
            "page_description" => "Page de connexion",
            "page_title" => "Page de connexion",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    public function creerCompte()
    {
        $data_page = [
            "page_description" => "Page de création d'un compte",
            "page_title" => "Page de création d'un compte",
            "view" => "views/Visiteur/creerCompte.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);

    }

    public function pageErreur($msg)
    {
        parent::pageErreur($msg);
    }
}
