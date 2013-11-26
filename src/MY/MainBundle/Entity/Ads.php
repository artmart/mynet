<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\MediaBundle\Entity\Media;

/**
 * MY\MainBundle\Entity\Ads
 *
 * @ORM\Table(name="ads")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\AdsRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class ads
{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var text $title
   * 
   * @ORM\Column(type="text", length=200, nullable=true)
   */
  protected $title = '';

  /**
   * @var text $ads
   * 
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $ads;

  /**
   * @var text $link
   * 
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $link;
  
  /**
   *
   * @var int
   * @ORM\Column(type="integer", nullable=true)
   */
  protected $position;

   /**
   * @var int
   * @ORM\Column(name="order_id", type="integer")
   */
  protected $order_id;
  
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
   * Set ads
   *
   * @param string $ads
   * @return Ads
   */
  public function setAds($ads = null)
  {
    $this->ads = $ads;

    return $this;
  }

  /**
   * Get ads
   *
   * @return string 
   */
  public function getAds()
  {
    return $this->ads;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Ads
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
   * 
   * @return type
   */
  public function __toString()
  {
    return $this->title;
  }

  /**
   * Set link
   *
   * @param string $link
   * @return Link
   */
  public function setLink($link)
  {
    $this->link = $link;

    return $this;
  }

  /**
   * Get link
   *
   * @return string 
   */
  public function getLink()
  {
    return $this->link;
  }
  
  /**
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return Image
   */
  public function setImage(\MY\MediaBundle\Entity\Media $image = null)
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
 
  /**
   * Set position
   *
   * @param integer $position
   * @return Ads
   */
  public function setPosition($position)
  {
    $this->position = $position;

    return $this;
  }

  /**
   * Get position
   *
   * @return integer 
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * Set order_id
   *
   * @param integer $orderId
   * @return Ads
   */
  public function setOrderId($orderId)
  {
    $this->order_id = $orderId;

    return $this;
  }

  /**
   * Get order_id
   *
   * @return integer 
   */
  public function getOrderId()
  {
    return $this->order_id;
  }

}
