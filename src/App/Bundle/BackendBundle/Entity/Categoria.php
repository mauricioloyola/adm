<?php

namespace App\Bundle\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 */
class Categoria
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var \DateTime
     */
    private $fchCreate;

    /**
     * @var integer
     */
    private $usrCreate;

    /**
     * @var \DateTime
     */
    private $fchUpdate;

    /**
     * @var integer
     */
    private $usrUpdate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Categoria
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fchCreate
     *
     * @param \DateTime $fchCreate
     * @return Categoria
     */
    public function setFchCreate($fchCreate)
    {
        $this->fchCreate = $fchCreate;

        return $this;
    }

    /**
     * Get fchCreate
     *
     * @return \DateTime 
     */
    public function getFchCreate()
    {
        return $this->fchCreate;
    }

    /**
     * Set usrCreate
     *
     * @param integer $usrCreate
     * @return Categoria
     */
    public function setUsrCreate($usrCreate)
    {
        $this->usrCreate = $usrCreate;

        return $this;
    }

    /**
     * Get usrCreate
     *
     * @return integer 
     */
    public function getUsrCreate()
    {
        return $this->usrCreate;
    }

    /**
     * Set fchUpdate
     *
     * @param \DateTime $fchUpdate
     * @return Categoria
     */
    public function setFchUpdate($fchUpdate)
    {
        $this->fchUpdate = $fchUpdate;

        return $this;
    }

    /**
     * Get fchUpdate
     *
     * @return \DateTime 
     */
    public function getFchUpdate()
    {
        return $this->fchUpdate;
    }

    /**
     * Set usrUpdate
     *
     * @param integer $usrUpdate
     * @return Categoria
     */
    public function setUsrUpdate($usrUpdate)
    {
        $this->usrUpdate = $usrUpdate;

        return $this;
    }

    /**
     * Get usrUpdate
     *
     * @return integer 
     */
    public function getUsrUpdate()
    {
        return $this->usrUpdate;
    }
}
