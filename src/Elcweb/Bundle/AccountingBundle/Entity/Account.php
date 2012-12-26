<?php

namespace Elcweb\Bundle\AccountingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elcweb\Bundle\AccountingBundle\Entity\Account
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Account
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
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=10)
     */
    private $code;

    /**
     * @var string type
     *
     * @ORM\ManyToOne(targetEntity="AccountType", inversedBy="accounts")
     */
    private $type;

    /**
     * @var string $category
     *
     * Comment : ORM\ManyToOne(targetEntity="AccountCategory", inversedBy="accounts")
     */
    private $category;

    /**
     * @var string $parent
     *
     * @ORM\Column(name="parent", type="string", length=255)
     */
    private $parent;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * @return Account
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
     * Set category
     *
     * @param string $category
     * @return Account
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return Account
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Account
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
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add category
     *
     * @param Elcweb\Bundle\AccountingBundle\Entity\AccountCategory $category
     * @return Account
     */
    public function addCategory(\Elcweb\Bundle\AccountingBundle\Entity\AccountCategory $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Remove category
     *
     * @param Elcweb\Bundle\AccountingBundle\Entity\AccountCategory $category
     */
    public function removeCategory(\Elcweb\Bundle\AccountingBundle\Entity\AccountCategory $category)
    {
        $this->category->removeElement($category);
    }
}