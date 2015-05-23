<?php

namespace App\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 */
class Author
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    private $years;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }


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
     * Set name
     *
     * @param string $name
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Author
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set years
     *
     * @param integer $years
     * @return Author
     */
    public function setYears($years)
    {
        $this->years = $years;

        return $this;
    }

    /**
     * Get years
     *
     * @return integer 
     */
    public function getYears()
    {
        return $this->years;
    }
    /**
     * @var integer
     */
    private $prueba;


    /**
     * Set prueba
     *
     * @param integer $prueba
     * @return Author
     */
    public function setPrueba($prueba)
    {
        $this->prueba = $prueba;

        return $this;
    }

    /**
     * Get prueba
     *
     * @return integer 
     */
    public function getPrueba()
    {
        return $this->prueba;
    }
}
