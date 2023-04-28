<?php
class produits
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?int $quantite = null;
    private ?int $prix = null;
  
    

    public function __construct($id = null, $nom, $quantite, $prix,)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->prix = $prix;
        
    }

    /**
     * Get the value of id
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * Get the value of quantite
     */
    public function getquantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setquantite($quantite)
    {
        $this->quantite = $quantite;

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
     * Get the value of prix
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


   
    
    












}