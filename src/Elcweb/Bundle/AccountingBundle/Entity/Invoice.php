<?php

namespace Elcweb\Bundle\AccountingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elcweb\Bundle\AccountingBundle\Entity\Invoice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Invoice
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
     * @var string $customer
     *
     * @ORM\Column(name="customer", type="string", length=255)
     */
    private $customer;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string $terms
     *
     * @ORM\Column(name="terms", type="string", length=255)
     */
    private $terms;

    /**
     * @var string $items
     *
     * @ORM\Column(name="items", type="string", length=255)
     */
    private $items;


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
     * Set customer
     *
     * @param string $customer
     * @return Invoice
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get customer
     *
     * @return string 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return Invoice
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set terms
     *
     * @param string $terms
     * @return Invoice
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * Get terms
     *
     * @return string 
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Set items
     *
     * @param string $items
     * @return Invoice
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Get items
     *
     * @return string 
     */
    public function getItems()
    {
        return $this->items;
    }
}