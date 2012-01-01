<?php

namespace Base\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Base\TestBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Base\TestBundle\Repository\Entity\ProductRepository")
 */
class Product
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var text $ad_text
     *
     * @ORM\Column(name="model", type="text")
     */
    private $model;

//    /**
//     * @ORM\ManyToMany(targetEntity="Category", cascade={"persist", "remove"})
//     * @ORM\JoinTable(name="product_category",
//     *      joinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id")},
//     *      inverseJoinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="id")}
//     *      )
//     */
//    protected $category;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */        
    protected $category; 
    
    /**
     * @var datetime $posted_at
     *
     * @ORM\Column(name="posted_at", type="datetime")
     */
    private $posted_at;

    /**
     * @var datetime $expires_at
     *
     * @ORM\Column(name="expires_at", type="datetime")
     */
    private $expires_at;

    /**
     * @var boolean $published
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;
    
    
    protected $dataClass;


    public function __construct()
    {
        //$this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->posted_at = new \DateTime();        
        $this->expires_at = new \DateTime();   
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
     * Set ad_title
     *
     * @param string $adTitle
     */
    public function setAdTitle($adTitle)
    {
        $this->ad_title = $adTitle;
    }

    /**
     * Get ad_title
     *
     * @return string 
     */
    public function getAdTitle()
    {
        return $this->ad_title;
    }

    /**
     * Set ad_text
     *
     * @param text $adText
     */
    public function setAdText($adText)
    {
        $this->ad_text = $adText;
    }

    /**
     * Get ad_text
     *
     * @return text 
     */
    public function getAdText()
    {
        return $this->ad_text;
    }

    /**
     * Set posted_at
     *
     * @param datetime $postedAt
     */
    public function setPostedAt($postedAt)
    {
        $this->posted_at = $postedAt;
    }

    /**
     * Get posted_at
     *
     * @return datetime 
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    /**
     * Set expires_at
     *
     * @param datetime $expiresAt
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;
    }

    /**
     * Get expires_at
     *
     * @return datetime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set published
     *
     * @param boolean $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    
    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set model
     *
     * @param text $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get model
     *
     * @return text 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Add category
     *
     * @param Acme\ClassifiedsBundle\Entity\Category $category
     */
    public function addCategory(\Base\TestBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    }

    /**
     * Get category
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param Base\TestBundle\Entity\Category $category
     */
    public function setCategory(\Base\TestBundle\Entity\Category $category)
    {
        $this->category = $category;
    }
    
    public function setDataClass($dataClass){
        $this->dataClass = $dataClass;
    }
}