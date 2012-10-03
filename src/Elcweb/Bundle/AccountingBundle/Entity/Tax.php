<?php

namespace Elcweb\Bundle\AccountingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elcweb\Bundle\AccountingBundle\Entity\Tax
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tax
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
     * @var integer $rate
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var string $account
     *
     * @ORM\Column(name="account", type="string", length=255)
     */
    private $account;


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
     * @return Taxe
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
     * Set rate
     *
     * @param integer $rate
     * @return Taxe
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return Taxe
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }
}
