<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use MY\MediaBundle\Entity\Media;

/**
 * MY\MainBundle\Entity\Project
 *
 * @ORM\Table(name="suggestion")
 * @ORM\Entity(repositoryClass="MY\MainBundle\Entity\SuggestionRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Suggestion
{

  const STATUS_OK = 1;
  const UNCHECKED = 2;

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var datetime $updated
   *
   * @Gedmo\Timestampable(on="update")
   * @ORM\Column(type="datetime")
   */
  private $updated;

  /**
   * @var string slug
   * 
   * @Gedmo\Slug(fields={"name"})
   * @ORM\Column(type="string", length=100, unique=true, nullable=false)
   */
  private $slug;

  /**
   * @var string name
   * 
   * @ORM\Column(type="string", length=64)
   */
  private $name = '';

  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\UserBundle\Entity\User", cascade={"persist"})
   */
  protected $user;

  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"persist"})
   */
  protected $image;

  /**
   * 
   * @ORM\ManyToOne(targetEntity="MY\MediaBundle\Entity\Media", cascade={"persist"})
   */
  protected $image_slide;

  /**
   * @var text $title_raw
   * @ORM\Column(length=255, nullable=true)
   */
  protected $title_raw;

  /**
   * @var text $title
   * @ORM\Column(length=255, nullable=true)
   */
  protected $title;

  /**
   * @var text $title_list
   * @ORM\Column(length=255, nullable=true)
   */
  protected $title_list;

  /**
   * @var text $suggestion_raw
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $suggestion_raw;

  /**
   * @var text $intro
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $intro;

  /**
   * @var text $suggestion
   * @ORM\Column(type="text", length=2000, nullable=true)
   */
  protected $suggestion;

  /**
   * @var text $solution_raw
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $solution_raw;

  /**
   * @var text $description
   * @ORM\Column(type="text", length=20000, nullable=true)
   */
  protected $solution;

  /**
   *
   * @var date
   * @ORM\Column(type="datetime")
   */
  protected $created_at;

  /**
   *
   * @var int
   * @ORM\Column(type="smallint")
   */
  protected $status;

  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $in_homepage;

  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $archive;

  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $in_top;

  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $in_discussion;

  /**
   *
   * @var int
   * @ORM\Column(type="integer", nullable=true)
   */
  protected $position = "1000";

  /**
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $show_contact;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $show_application;
  
  /**
   * @var string name
   * 
   * @ORM\Column(type="integer", nullable=true)
   */
  protected $likes = 0;

  /**
   * @ORM\Column(type="array", nullable=true)
   */
  protected $edited;
 
  /**
   * @ORM\Column(type="array", nullable=true)
   */
  protected $corrected;

  /**
   *
   * @var boolean
   * @ORM\Column(type="boolean", nullable=true)
   */
  protected $user_uploaded;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  protected $path;

  /**
   * @Assert\File(maxSize="60000000")
   */
  protected $file;
  
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
  
  public function getAbsolutePath()
  {
    return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
  }

  public function getWebPath()
  {
    return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
  }

  protected function getUploadRootDir()
  {
    return __DIR__ . '/../../../../web/' . $this->getUploadDir();
  }

  protected function getUploadDir()
  {
    return 'uploads/rawimage';
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
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload()
  {
    if (null !== $this->file)
    {
      // do whatever you want to generate a unique name
      $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
    }
  }

  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    if (null === $this->file)
    {
      return;
    }

    // if there is an error when moving the file, an exception will
    // be automatically thrown by move(). This will properly prevent
    // the entity from being persisted to the database on error
    $this->file->move($this->getUploadRootDir(), $this->path);

    unset($this->file);
  }

  /**
   * @ORM\PostRemove()
   */
  public function removeUpload()
  {
    if ($file = $this->getAbsolutePath())
    {
      unlink($file);
    }
  }
 

  /**
   * Set title_list
   *
   * @param string $titleList
   * @return Suggestion
   */
  public function setTitleList($titleList)
  {
    $this->title_list = $titleList;

    return $this;
  }

  /**
   *
   * @return boolean 
   */
  public function getShowApplication()
  {
    return $this->show_application;
  }

  /**
   * Set name
   *
   * @param string $show_application
   * @return boolean 
   */
  public function setShowApplication($show_application)
  {
    $this->show_application = $show_application;

    return $this;
  }

  /**
   *
   * @return boolean 
   */
  public function getShowContact()
  {
    return $this->show_contact;
  }

  /**
   * Set name
   *
   * @param string $show_contact
   * @return boolean 
   */
  public function setShowContact($show_contact)
  {
    $this->show_contact = $show_contact;

    return $this;
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
   * Set slug
   *
   * @param string $slug
   * @return Suggestion
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
   * Set name
   *
   * @param string $name
   * @return Suggestion
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
   * Set title_raw
   *
   * @param string $titleRaw
   * @return Suggestion
   */
  public function setTitleRaw($titleRaw)
  {
    $this->title_raw = $titleRaw;

    return $this;
  }

  /**
   * Get title_raw
   *
   * @return string 
   */
  public function getTitleRaw()
  {
    return $this->title_raw;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Suggestion
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
   * Get title_list
   *
   * @return string 
   */
  public function getTitleList()
  {
    return $this->title_list;
  }

  /**
   * Set suggestion_raw
   *
   * @param string $suggestionRaw
   * @return Suggestion
   */
  public function setSuggestionRaw($suggestionRaw)
  {
    $this->suggestion_raw = $suggestionRaw;

    return $this;
  }

  /**
   * Get suggestion_raw
   *
   * @return string 
   */
  public function getSuggestionRaw()
  {
    return $this->suggestion_raw;
  }

  /**
   * Set intro
   *
   * @param string $intro
   * @return Suggestion
   */
  public function setIntro($intro)
  {
    $this->intro = $intro;

    return $this;
  }

  /**
   * Get intro
   *
   * @return string 
   */
  public function getIntro()
  {
    return $this->intro;
  }

  /**
   * Set suggestion
   *
   * @param string $suggestion
   * @return Suggestion
   */
  public function setSuggestion($suggestion)
  {
    $this->suggestion = $suggestion;

    return $this;
  }

  /**
   * Get suggestion
   *
   * @return string 
   */
  public function getSuggestion()
  {
    return $this->suggestion;
  }

  /**
   * Set solution_raw
   *
   * @param string $solutionRaw
   * @return Suggestion
   */
  public function setSolutionRaw($solutionRaw)
  {
    $this->solution_raw = $solutionRaw;

    return $this;
  }

  /**
   * Get solution_raw
   *
   * @return string 
   */
  public function getSolutionRaw()
  {
    return $this->solution_raw;
  }

  /**
   * Set solution
   *
   * @param string $solution
   * @return Suggestion
   */
  public function setSolution($solution)
  {
    $this->solution = $solution;

    return $this;
  }

  /**
   * Get solution
   *
   * @return string 
   */
  public function getSolution()
  {
    return $this->solution;
  }

  /**
   * Set created_at
   *
   * @param \DateTime $createdAt
   * @return Suggestion
   */
  public function setCreatedAt($createdAt)
  {
    $this->created_at = $createdAt;

    return $this;
  }

  /**
   * Get created_at
   *
   * @return \DateTime 
   */
  public function getCreatedAt()
  {
    return $this->created_at;
  }

  /**
   * Set status
   *
   * @param integer $status
   * @return Suggestion
   */
  public function setStatus($status)
  {
    $this->status = $status;

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
   * Set in_homepage
   *
   * @param boolean $inHomepage
   * @return Suggestion
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

  /**
   * Set edited
   *
   * @param boolean $corrected_en
   * @return Suggestion
   */
  public function setCorrectedEn($corrected_en)
  {
    $this->corrected_en = $corrected_en;

    return $this;
  }

  /**
   * Get edited
   *
   * @return boolean 
   */
  public function getCorrectedEn()
  {
    return $this->corrected_en;
  }

  /**
   * Set in_top
   *
   * @param boolean $inTop
   * @return Suggestion
   */
  public function setInTop($inTop)
  {
    $this->in_top = $inTop;

    return $this;
  }

  /**
   * Get in_top
   *
   * @return boolean 
   */
  public function getInTop()
  {
    return $this->in_top;
  }

  /**
   * Set in_discussion
   *
   * @param boolean $inDiscussion
   * @return Suggestion
   */
  public function setInDiscussion($inDiscussion)
  {
    $this->in_discussion = $inDiscussion;

    return $this;
  }

  /**
   * Get in_discussion
   *
   * @return boolean 
   */
  public function getInDiscussion()
  {
    return $this->in_discussion;
  }

  /**
   * Set position
   *
   * @param integer $position
   * @return Suggestion
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
   * Set user
   *
   * @param \MY\UserBundle\Entity\User $user
   * @return Suggestion
   */
  public function setUser(\MY\UserBundle\Entity\User $user = null)
  {
    $this->user = $user;

    return $this;
  }

  /**
   * Get user
   *
   * @return \MY\UserBundle\Entity\User 
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   * Set image
   *
   * @param \MY\MediaBundle\Entity\Media $image
   * @return Suggestion
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
   * Set image_slide
   *
   * @param \MY\MediaBundle\Entity\Media $imageSlide
   * @return Suggestion
   */
  public function setImageSlide(\MY\MediaBundle\Entity\Media $imageSlide = null)
  {
    $this->image_slide = $imageSlide;

    return $this;
  }

  /**
   * Get image_slide
   *
   * @return \MY\MediaBundle\Entity\Media 
   */
  public function getImageSlide()
  {
    return $this->image_slide;
  }

  /**
   * Set path
   *
   * @param string $path
   * @return Suggestion
   */
  public function setPath($path)
  {
    $this->path = $path;

    return $this;
  }

  /**
   * Get path
   *
   * @return string 
   */
  public function getPath()
  {
    return $this->path;
  }

  /**
   * Set file
   *
   * @param string $file
   * @return Suggestion
   */
  public function setFile($file)
  {
    $this->file = $file;

    return $this;
  }

  /**
   * Get file
   *
   * @return string 
   */
  public function getFile()
  {
    return $this->file;
  }

  /**
   * Set archive
   *
   * @param boolean $archive
   * @return Suggestion
   */
  public function setArchive($archive)
  {
    $this->archive = $archive;

    return $this;
  }

  /**
   * Get archive
   *
   * @return boolean 
   */
  public function getArchive()
  {
    return $this->archive;
  }

  /**
   * Set edited
   *
   * @param string $edited
   * @return Suggestion
   */
  public function setEdited($edited)
  {
    $this->edited = $edited;

    return $this;
  }

  /**
   * Get edited
   *
   * @return array 
   */
  public function getEdited()
  {
    return $this->edited;
  }

  /**
   * Set corrected
   *
   * @param string $corrected
   * @return Suggestion
   */
  public function setCorrected($corrected)
  {
    $this->corrected = $corrected;

    return $this;
  }

  /**
   * Get corrected
   *
   * @return array 
   */
  public function getCorrected()
  {
    return $this->corrected;
  }

  /**
   * Set user_uploaded
   *
   * @param boolean $user_uploaded
   * @return Suggestion
   */
  public function setUserUploaded($user_uploaded)
  {
    $this->user_uploaded = $user_uploaded;

    return $this;
  }

  /**
   * Get user_uploaded
   *
   * @return boolean 
   */
  public function getUserUploaded()
  {
    return $this->user_uploaded;
  }

  /**
   * Set updated
   *
   * @param \DateTime $updated
   * @return Suggestion
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
   * Set likes
   *
   * @param string $likes
   * @return Suggestion
   */
  public function setLikes($likes)
  {
    $this->likes = $likes;

    return $this;
  }

  /**
   * Get likes
   *
   * @return string 
   */
  public function getLikes()
  {
    return $this->likes;
  }
  
  /**
   * Set meta_title
   *
   * @param string $metaTitle
   * @return Content
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
   * @return Content
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
   * @return Content
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

}