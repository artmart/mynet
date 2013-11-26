<?php

namespace MY\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MY\MediaBundle\Entity\MediaRepository")
 * @ORM\Table(name="media__media")
 * @ORM\HasLifecycleCallbacks()
 */
class Media extends BaseMedia {

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $in_homepage;

  /**
   * Get id
   *
   * @return integer $id
   */
  public function getId() {
    return $this->id;
  }
  
  /**
   * Set in_homepage
   *
   * @param boolean $inHomepage
   * @return Media
   */
  public function setInHomepage($inHomepage)
  {
    $this->in_homepage = $inHomepage;

    return $this;
  }

  /**
   * Get in_homepage
   *
   * @return boolean 
   */
  public function getInHomepage()
  {
    return $this->in_homepage;
  }
}