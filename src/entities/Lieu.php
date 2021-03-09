<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
  * @ORM\Entity @ORM\Table(name="lieu") 
  **/

class Lieu{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type="string") **/
    private $nom;
    /** @ORM\column(type="decimal") **/
    private $longitude;
    /** @ORM\column(type="decimal") **/
    private $latitude;
    /**
     * One lieu has many formations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    /**
    * Many Lieux have one user. This is the owning side.
    * @ORM\ManyToOne(targetEntity="user", inversedBy="lieux")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $user;

    public function __construct(){
        $this->formations = new ArrayCollection();
    }
    //Pour id
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    //Pour nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    //Pour longitude 
    public function getLongitude(){
        return $this->longitude;
    }
    public function setLongitude($longitude){
        $this->longitude = $longitude;
    }
    //Pour latitude
    public function getLatitude(){
        return $this->latitude;
    }
    public function setDuree($duree){
        $this->duree = $duree;
    }
    //Pour formations
    public function getFormations(){
        return $this->formations;
    }
    public function setFormation($formations){
        $this->formations = $formations;
    }
    //Pour user
    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        $this->user = $user;
    }
}

?>