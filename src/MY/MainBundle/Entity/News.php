<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * MY\MainBundle\Entity\News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\NewsRepository")
 */
class News
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
   * @ORM\Column(length=255, nullable=true)
   */
  protected $title;

  /**
   * @var text $content
   * 
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $content;

  /**
   * @var text $short_content
   * 
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $short_content;

  /**
   * @var string news_status
   * 
   * @ORM\Column(type="integer")
   */
  private $news_status;
  
  /**
   * @var string homepage_status
   * 
   * @ORM\Column(type="integer")
   */
  private $homepage_status;

  /**
   * @var date $news_date
   *
   * @ORM\Column(name="news_date", type="date")
   */
  protected $news_date;

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
   * @var integer $image
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"all"})
   */
  protected $image;

  /**
   * @var string $meta_title
   * @ORM\Column(name="meta_title", type="string", length=200, nullable=true)
   */
  protected $meta_title;

  /**
   * @var string $meta_desc
   * @ORM\Column(name="meta_desc", type="string", length=300, nullable=true)
   */
  protected $meta_desc;

  /**
   * @var string $meta_kw
   * @ORM\Column(name="meta_kw", type="string", length=200, nullable=true)
   */
  protected $meta_kw;
  
  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Gallery", cascade={"persist"})
   */
  protected $gallery;
  
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
   * @return News
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
   * @return News
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
   * @return News
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
   * @return News
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
   * @return News
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
   * Set news_status
   *
   * @param integer $newsStatus
   * @return News
   */
  public function setNewsStatus($newsStatus)
  {
    $this->news_status = $newsStatus;

    return $this;
  }

  /**
   * Get news_status
   *
   * @return integer 
   */
  public function getNewsStatus()
  {
    return $this->news_status;
  }

  /**
   * Set created
   *
   * @param \DateTime $created
   * @return News
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
   * @return News
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
   * @return News
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
   * @return News
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
   * @return News
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
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return News
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
   * Set news_date
   *
   * @param \DateTime $newsDate
   * @return News
   */
  public function setNewsDate($newsDate)
  {
    $this->news_date = $newsDate;

    return $this;
  }

  /**
   * Get news_date
   *
   * @return \DateTime 
   */
  public function getNewsDate()
  {
    return $this->news_date;
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
   * @return News
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