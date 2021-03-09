<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="user") 
 **/

class User{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\column(type="string") **/
    private $nom;
    /** @ORM\column(type="string") **/
    private $prenom;
    /** @ORM\column(type="string") **/
    private $email;
    /** @ORM\column(type="string") **/
    private $password;
     /**
     * One user has many lieux. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;
     /**
     * Many Users have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     * @ORM\JoinTable(name="users_roles")
     */
    private $roles;

    public function __construct(){
        $this->lieux = new ArrayCollection();
        $this->roles = new ArrayCollection();
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
    //Pour prenom 
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($date){
        $this->prenom = $prenom;
    }
    //Pour email
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($duree){
        $this->email = $email;
    }
    //Pour password
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($lieu){
        $this->password = $password;
    }
    //Pour lieux
    public function getLieux(){
        return $this->lieux;
    }
    public function setLieux($lieux){
        $this->lieux = $lieux;
    }
    //Pour roles
    public function getRoles(){
        return $this->roles;
    }
    public function setRoles($roles){
        $this->roles = $roles;
    }
}

?>