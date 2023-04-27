<?php

class Inscription {
    private $id;
    private $id_of;
    private $id_ur;
    private $date_debut;
    private $date_fin;
    private $motif;

    public function __construct($id, $id_of, $id_ur, $date_debut, $date_fin, $motif) {
        $this->id = $id;
        $this->id_of = $id_of;
        $this->id_ur = $id_ur;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->motif = $motif;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getId_of() {
        return $this->id_of;
    }

    public function getId_ur() {
        return $this->id_ur;
    }

    public function getDate_debut() {
        return $this->date_debut;
    }

    public function getDate_fin() {
        return $this->date_fin;
    }
    public function getMotif() {
        return $this->motif;
    }
    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setId_of($id_of) {
        $this->id_of = $id_of;
    }

    public function setId_ur($id_ur) {
        $this->id_ur = $id_ur;
    }

    public function setDate_debut($date_debut) {
        $this->date_debut = $date_debut;
    }

    public function setDate($date_fin) {
        $this->date = $date_fin;
    }
    public function setMotif($motif) {
        $this->date = $motif;
    }
}

?>
