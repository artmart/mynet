<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * MY\MainBundle\Entity\Slider
 *
 * @ORM\Table(name="Slider")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\SliderRepository")
 * 
 */
class Slider
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string
   * 
   * 
   * @ORM\Column(name="name", type="string", length=100, nullable=true)
   */
  private $name='';
  
    
  
  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"persist"})
   * @ORM\JoinColumn(name="image_id", referencedColumnName="id", onDelete="SET NULL")
   */
  protected $image;
 
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
   * @return Slider
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
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return City
   */
  public function setImage(\MY\MediaBundle\Entity\Media $image)
  {
    $this->image = $image;

    return $this;
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