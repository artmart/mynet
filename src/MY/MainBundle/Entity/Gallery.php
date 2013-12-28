<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\GalleryRepository")
 */

class Gallery
{

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string name
   * 
   * @ORM\Column(type="string", length=100, nullable=false)
   */
  private $name;

  /**
   * @var string name
   * 
   * @ORM\Column(type="integer",nullable=false)
   */
  private $type;

  /**
   * @var string name
   * 
   * @Gedmo\Slug(fields={"name"})
   * @ORM\Column(type="string", length=100, nullable=false)
   */
  private $slug;

  /**
   * @var string name
   * 
   * @ORM\Column(type="string", length=100, nullable=true)
   */
  private $title;

  /**
   * @var integer $image
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"persist"})
   */
  protected $image;

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
   * @return Gallery
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
   * Set gallery
   *
   * @param \MY\MediaBundle\Entity\Gallery $gallery
   * @return Gallery
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
   * Set title
   *
   * @param string $title
   * @return Gallery
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
   * Set slug
   *
   * @param string $slug
   * @return Gallery
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
   * Set type
   *
   * @param integer $type
   * @return Gallery
   */
  public function setType($type)
  {
    $this->type = $type;

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
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return Gallery
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

}