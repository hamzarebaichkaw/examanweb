<?php
/**
 * Created by PhpStorm.
 * User: chkaw
 * Date: 31/12/2016
 * Time: 01:40
 */

namespace TuniGo\tripBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Reservation
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private  $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomPrenom()
    {
        return $this->NomPrenom;
    }

    /**
     * @param mixed $NomPrenom
     */
    public function setNomPrenom($NomPrenom)
    {
        $this->NomPrenom = $NomPrenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * @param mixed $nbrPlace
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;
    }

    /**
     * @return mixed
     */
    public function getTypePaiment()
    {
        return $this->typePaiment;
    }

    /**
     * @param mixed $typePaiment
     */
    public function setTypePaiment($typePaiment)
    {
        $this->typePaiment = $typePaiment;
    }

    /**
     * @return mixed
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * @param mixed $idOffre
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    }
    /**
     * @ORM\column(type="string",length=255)
     */
    private $NomPrenom;
    /**
     * @ORM\column(type="string",length=255)
     */
    private $email;
    /**
     * @ORM\column(type="integer")
     */
    private $nbrPlace;
    /**
     * @ORM\column(type="string",length=255)
     */
    private $typePaiment;
    /**
     *@ORM\ManyToOne(targetEntity="Offre")
     *@ORM\JoinColumn(name="idOffre", referencedColumnName="id",onDelete="CASCADE")
     */
    private $idOffre;

}