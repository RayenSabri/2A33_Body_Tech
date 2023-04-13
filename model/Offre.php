<?php

class Offre {
    private $id;
    private $titre;
    private $description;
    private $codePromo;
    private $date;

    public function __construct($id, $titre, $description, $codePromo, $date) {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->CodePromo = $codePromo;
        $this->date = $date;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCodePromo() {
        return $this->CodePromo;
    }

    public function getDate() {
        return $this->date;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCodePromo($codePromo) {
        $this->CodePromo = $codePromo;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}

?>
