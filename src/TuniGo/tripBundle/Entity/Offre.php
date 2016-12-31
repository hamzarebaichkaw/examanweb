<?php

/**
 * Created by PhpStorm.
 * User: chkaw
 * Date: 31/12/2016
 * Time: 01:12
 */
namespace TuniGo\tripBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private  $id;
    /**
     * @ORM\column(type="string",length=255)
     */
    private $destination;
    /**
     * @ORM\column(type="date")
     */
    private $dateAller;
    /**
     * @ORM\column(type="date")
     */
    private $dateRetour;

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
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getDateAller()
    {
        return $this->dateAller;
    }

    /**
     * @param mixed $dateAller
     */
    public function setDateAller($dateAller)
    {
        $this->dateAller = $dateAller;
    }

    /**
     * @return mixed
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * @param mixed $dateRetour
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getCompanie()
    {
        return $this->companie;
    }

    /**
     * @param mixed $companie
     */
    public function setCompanie($companie)
    {
        $this->companie = $companie;
    }
    /**
     * @ORM\column(type="integer")
     */
    private $prix;
    /**
     * @ORM\column(type="string",length=255)
     */
    private $companie;
}