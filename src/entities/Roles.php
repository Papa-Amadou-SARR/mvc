<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity @ORM\Table(name="roles") 
 **/

class Roles{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type="string") **/
    private $nom;
     /**
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    

    public function __construct(){
        $this->users = new ArrayCollection();
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
    //Pour users
    public function getUsers(){
        return $this->users;
    }
    public function setUsers($users){
        $this->users = $users;
    }
}
?>