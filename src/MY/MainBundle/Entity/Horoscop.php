<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * MY\MainBundle\Entity\Horoscop
 *
 * @ORM\Table(name="horoscop")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\HoroscopRepository")
 * @Gedmo\TranslationEntity(class="MY\MainBundle\Entity\HoroscopTranslations")
 */

class Horoscop
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string name
   * 
   * @ORM\Column(type="string", length=100, nullable=false)
   */
  private $name='';

  /**
   * @var string slug
   * 
   * @Gedmo\Slug(fields={"name"})
   * @ORM\Column(type="string", length=100, unique=true, nullable=false)
   */
  private $slug;

  /**
   * @var text $title
   * 
   * @Gedmo\Translatable
   * @ORM\Column(length=255, nullable=true)
   */
  protected $title;

  /**
   * @var text $content
   * @Gedmo\Translatable
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $content;

  /**
   * @var text $short_content
   * @Gedmo\Translatable
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $short_content;

  /**
   * @var string status
   * 
   * @ORM\Column(type="integer")
   */
  private $status;
  
  /**
   * @var string type
   * 
   * @ORM\Column(type="integer")
   */
  private $type;
  
  /**
   * @var string homepage_status
   * 
   * @ORM\Column(type="integer")
   */
  private $homepage_status;

  /**
   * @var _date $_date
   *
   * @ORM\Column(name="_date", type="date")
   */
  protected $_date;

  /**
   * @var datetime $created
   * 
   * @ORM\Column(name="created", type="datetime")
   * @Gedmo\Timestampable(on="create")
   */
  protected $created;

  /**
   * @var datetime $updated
   *
   * @ORM\Column(name="updated", type="datetime")
   * @Gedmo\Timestampable
   */
  private $updated;
  
  /**
   * @ORM\OneToMany(targetEntity="HoroscopTranslations", mappedBy="object", cascade={"persist", "remove"})
   */
  protected $translations;

  /**
   * Required for Translatable behaviour
   * @Gedmo\Locale
   */
  protected $locale;
   
  /**
   * @var integer $image
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"persist"})
   */
  protected $image;
  
  /**
   * @var integer $meta_title
   * @Gedmo\Translatable
   * @ORM\Column(name="meta_title", type="string", length=200, nullable=true)
   */
  protected $meta_title;

  /**
   * @var integer $meta_desc
   * @Gedmo\Translatable
   * @ORM\Column(name="meta_desc", type="string", length=300, nullable=true)
   */
  protected $meta_desc;

  /**
   * @var integer $meta_kw
   * @Gedmo\Translatable
   * @ORM\Column(name="meta_kw", type="string", length=200, nullable=true)
   */
  protected $meta_kw;

  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Gallery", cascade={"persist"})
   */
  protected $gallery;
  
  /**
   * Constructor
   */
  public function __construct()
  {
    $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
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
   * @return Horoscop
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
   * Set slug
   *
   * @param string $slug
   * @return Horoscop
   */
  public function setSlug($slug)
  {
    $this->slug = $slug;

    return $this;
  }

  /**
   * Get slug
   *
   * @return string 
   */
  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Horoscop
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
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
   * Set content
   *
   * @param string $content
   * @return Horoscop
   */
  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }

  /**
   * Get content
   *
   * @return string 
   */
  public function getContent()
  {
    return $this->content;
  }

  /**
   * Set short_content
   *
   * @param string $shortContent
   * @return Horoscop
   */
  public function setShortContent($shortContent)
  {
    $this->short_content = $shortContent;

    return $this;
  }

  /**
   * Get short_content
   *
   * @return string 
   */
  public function getShortContent()
  {
    return $this->short_content;
  }

  /**
   * Set status
   *
   * @param integer $Status
   * @return Horoscop
   */
  public function setStatus($Status)
  {
    $this->status = $Status;

    return $this;
  }

  /**
   * Get status
   *
   * @return integer 
   */
  public function getStatus()
  {
    return $this->status;
  }
  
 /**
   * Set type
   *
   * @param integer $Type
   * @return Horoscop
   */
  public function setType($Type)
  {
    $this->type = $Type;

    return $this;
  }

  /**
   * Get type
   *
   * @return integer 
   */
  public function getType()
  {
    return $this->type;
  } 
  
  /**
   * Set created
   *
   * @param \DateTime $created
   * @return Horoscop
   */
  public function setCreated($created)
  {
    $this->created = $created;

    return $this;
  }

  /**
   * Get created
   *
   * @return \DateTime 
   */
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * Set updated
   *
   * @param \DateTime $updated
   * @return Horoscop
   */
  public function setUpdated($updated)
  {
    $this->updated = $updated;

    return $this;
  }

  /**
   * Get updated
   *
   * @return \DateTime 
   */
  public function getUpdated()
  {
    return $this->updated;
  }

  /**
   * Set meta_title
   *
   * @param string $metaTitle
   * @return Horoscop
   */
  public function setMetaTitle($metaTitle)
  {
    $this->meta_title = $metaTitle;

    return $this;
  }

  /**
   * Get meta_title
   *
   * @return string 
   */
  public function getMetaTitle()
  {
    return $this->meta_title;
  }

  /**
   * Set meta_desc
   *
   * @param string $metaDesc
   * @return Horoscop
   */
  public function setMetaDesc($metaDesc)
  {
    $this->meta_desc = $metaDesc;

    return $this;
  }

  /**
   * Get meta_desc
   *
   * @return string 
   */
  public function getMetaDesc()
  {
    return $this->meta_desc;
  }

  /**
   * Set meta_kw
   *
   * @param string $metaKw
   * @return Horoscop
   */
  public function setMetaKw($metaKw)
  {
    $this->meta_kw = $metaKw;

    return $this;
  }

  /**
   * Get meta_kw
   *
   * @return string 
   */
  public function getMetaKw()
  {
    return $this->meta_kw;
  }
  
  /**
   * Add translations
   *
   * @param \MY\MainBundle\Entity\HoroscopTranslations $translations
   * @return Horoscop
   */
  public function addTranslation(\MY\MainBundle\Entity\HoroscopTranslations $translations)
  {
    $this->translations[] = $translations;
    $translations->setObject($this);

    return $this;
  }

  /**
   * Remove translations
   *
   * @param \MY\MainBundle\Entity\HoroscopTranslations $translations
   */
  public function removeTranslation(\MY\MainBundle\Entity\HoroscopTranslations $translations)
  {
    $this->translations->removeElement($translations);
  }

  /**
   * Get translations
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getTranslations()
  {
    return $this->translations;
  }
      
  /**
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return Horoscop
   */
  public function setImage(\MY\MediaBundle\Entity\Media $image = null)
  {
    $this->image = $image;

    return $this;
  }

  /**
   * 
   * @return type
   */
  public function __toString()
  {
    return $this->name;
  }

  /**
   * Get image
   *
   * @return \MY\MediaBundle\Entity\Media 
   */
  public function getImage()
  {
    return $this->image;
  }

   /**
   * Set _date
   *
   * @param \DateTime $Date
   * @return Horoscop
   */
  public function set_Date($_Date)
  {
    $this->_date = $_Date;

    return $this;
  }

  /**
   * Get _date
   *
   * @return \DateTime 
   */
  public function get_Date()
  {
    return $this->_date;
  }
  
  
    /**
     * Set gallery
     *
     * @param \MY\MediaBundle\Entity\Gallery $gallery
     * @return School
     */
    public function setGallery(\MY\MediaBundle\Entity\Gallery $gallery = null)
    {
        $this->gallery = $gallery;
    
        return $this;
    }

    /**
     * Get gallery
     *
     * @return \MY\MediaBundle\Entity\Gallery 
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    
    /**
   * Set homepage_status
   *
   * @param integer $homepageStatus
   * @return Horoscop
   */
  public function setHomepageStatus($homepageStatus)
  {
    $this->homepage_status = $homepageStatus;

    return $this;
  }

  /**
   * Get homepage_status
   *
   * @return integer 
   */
  public function getHomepageStatus()
  {
    return $this->homepage_status;
  }

}