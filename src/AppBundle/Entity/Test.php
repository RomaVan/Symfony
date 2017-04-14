<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Test")
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $someName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numbers;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSomeName()
    {
        return $this->someName;
    }

    /**
     * @param mixed $someName
     */
    public function setSomeName($someName)
    {
        $this->someName = $someName;
    }

    /**
     * @return mixed
     */
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * @param mixed $numbers
     */
    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;
    }

    public function getUpdatedAt()
    {
        return new \DateTime('-'.rand(0,100).'days');
    }

}