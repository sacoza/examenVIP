<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VIP
 *
 * @ORM\Table(name="v_i_p")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VIPRepository")
 */
class VIP
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="edad", type="string", length=255)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="DNI", type="string", length=255)
     */
    private $dNI;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return VIP
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return VIP
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set edad
     *
     * @param string $edad
     *
     * @return VIP
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set dNI
     *
     * @param string $dNI
     *
     * @return VIP
     */
    public function setDNI($dNI)
    {
        $this->dNI = $dNI;

        return $this;
    }

    /**
     * Get dNI
     *
     * @return string
     */
    public function getDNI()
    {
        return $this->dNI;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return VIP
     */
    public function setcargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getcargo()
    {
        return $this->cargo;
    }


        /**
         * Set telefono
         *
         * @param string $telefono
         *
         * @return VIP
         */
        public function settelefono($telefono)
        {
            $this->telefono = $telefono;

            return $this;
        }

        /**
         * Get telefono
         *
         * @return string
         */
        public function gettelefono()
        {
            return $this->telefono;
        }


}
