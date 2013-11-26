<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="interestings_translations",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="interestings_trans_lookup_unique_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class InterestingsTranslations extends AbstractPersonalTranslation
{

  /**
   * @var integer $id
   *
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @var string $locale
   *
   * @ORM\Column(type="string", length=8)
   */
  protected $locale;

  /**
   * @var string $field
   *
   * @ORM\Column(type="string", length=32)
   */
  protected $field;

  /**
   * @var text $content
   *
   * @ORM\Column(type="text", nullable=true)
   */
  protected $content;

  /**
   * @var text $short_content
   *
   * @ORM\Column(type="text", nullable=true)
   */
  protected $short_content;

  /**
   * @ORM\ManyToOne(targetEntity="Interestings", inversedBy="translations")
   * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
   */
  protected $object;

  /**
   * Convinient constructor
   *
   * @param string $locale
   * @param string $field
   * @param string $content
   */
  public function __construct($locale = null, $field = null, $content = null)
  {
    $this->setLocale($locale);
    $this->setField($field);
    $this->setContent($content);
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
   * Set locale
   *
   * @param string $locale
   * @return InterestingsTranslations
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;

    return $this;
  }

  /**
   * Get locale
   *
   * @return string 
   */
  public function getLocale()
  {
    return $this->locale;
  }

  /**
   * Set field
   *
   * @param string $field
   * @return InterestingsTranslations
   */
  public function setField($field)
  {
    $this->field = $field;

    return $this;
  }

  /**
   * Get field
   *
   * @return string 
   */
  public function getField()
  {
    return $this->field;
  }

  /**
   * Set content
   *
   * @param string $content
   * @return InterestingsTranslations
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
   * @return InterestingsTranslations
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
   * Set object
   *
   * @param MY\MainBundle\Entity\Interestings $object
   * @return EventTranslation
   */
  public function setObject($object = null)
  {
    $this->object = $object;

    return $this;
  }

  /**
   * Get object
   *
   * @return \MY\MainBundle\Entity\Interestings 
   */
  public function getObject()
  {
    return $this->object;
  }

}