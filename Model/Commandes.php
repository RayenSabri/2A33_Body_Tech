<?php
class Commandes
{
    private ?int $numC = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $adresse = null;
    private ?int $numTel= null;

    public function __construct($numC = null, $nom, $prenom, $adresse, $numTel)
    {
        $this->numC = $numC;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numTel = $numTel;
    }

    /**
     * Get the value of numC
     */
    public function getnumC()
    {
        return $this->numC;
    }

    /**
     * Get the value of prenom
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getadresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setadresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of numTel
     */
    public function getnumTel()
    {
        return $this->numTel;
    }

    /**
     * Set the value of numTel
     *
     * @return  self
     */
    public function setnumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }
}