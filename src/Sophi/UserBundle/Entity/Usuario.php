<?php

namespace Sophi\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_usuario")
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lastName;

    public function __construct(){
        parent::__construct();
    }

    /**
     * Agrega un rol al usuario.
     * @throws Exception
     * @param Rol $rol 
     */
    public function addRole($rol)
    {
        $this->roles = array();
        if($rol == 1) {
          array_push($this->roles, 'ROLE_ADMIN');
        }
        else if($rol == 2) {
          array_push($this->roles, 'ROLE_CHEF');
        }
        else if($rol == 3) {
          array_push($this->roles, 'ROLE_USER');
        }
    }

   /**
    * @return String $firstName 
    */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
   /*
    * @param String $firstName
    */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return String $lastName 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /*
     * @param String $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getCompleteName()
    {
        return (string) $this->getFirstName." ".$this->getLastName;
    }

    public function __toString()
    {
        return (string) $this->getCompleteName();
    }

    
}