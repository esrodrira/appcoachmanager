<?php

namespace App\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recipes
 */
class Recipes
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
    private $difficulty;

    /**
     * @var string
     */
    private $description;

    protected $author;

    protected $ingredients;

    public function __construct(Author $author, $name, $difficulty, $description)
    {
        $this->author = $author;
        $this->name = $name;
        $this->difficulty = $difficulty;
        $this->description = $description;
        $this->ingredients = new ArrayCollection();
    }

    public function add(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
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
     * @return Recipes
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
     * Set difficulty
     *
     * @param string $difficulty
     * @return Recipes
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Recipes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
