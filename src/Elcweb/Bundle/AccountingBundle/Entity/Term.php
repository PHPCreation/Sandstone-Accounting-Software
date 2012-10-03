<?php

namespace Elcweb\Bundle\AccountingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elcweb\Bundle\AccountingBundle\Entity\Term
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Term
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer $netduein
     *
     * @ORM\Column(name="netduein", type="integer")
     */
    private $netduein;


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
     * @return Term
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
     * Set netduein
     *
     * @param integer $netduein
     * @return Term
     */
    public function setNetduein($netduein)
    {
        $this->netduein = $netduein;
        return $this;
    }

    /**
     * Get netduein
     *
     * @return integer 
     */
    public function getNetduein()
    {
        return $this->netduein;
    }
}