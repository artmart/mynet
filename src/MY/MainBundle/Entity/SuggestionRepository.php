<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;
use MY\MainBundle\Entity\Suggestion;
use Doctrine\ORM\Query;

/**
 * SuggestionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SuggestionRepository extends EntityRepository
{

  /**
   * 
   * @return type
   */
  public function findAllByHomepageOrderedByPosition($disc)
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT s, i FROM MYMainBundle:Suggestion s 
                           JOIN s.image_slide i
                           WHERE s.in_homepage = 1 AND s.in_discussion = ' . (int)$disc . ' AND s.status = ' . Suggestion::STATUS_OK . '
                           ORDER BY s.position');

    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
  /**
   * 
   * @return type
   */
  public function findLastByCreatedAt()
  {
    $query = $this->getEntityManager()
            ->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.status = " . Suggestion::STATUS_OK . "
                           ORDER BY s.created_at DESC")->setMaxResults('1');

    return $query->getSingleResult();
  }

  /**
   * 
   * @return type
   */
  public function findAllByTopOrderedByPosition()
  {
    $query = $this->getEntityManager()
                    ->createQuery("SELECT s, i, u FROM MYMainBundle:Suggestion s
                           JOIN s.image i
                           JOIN s.user u
                           WHERE s.in_top = 1
                           ORDER BY s.likes DESC");

    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
   /**
   * 
   * @return type
   */
  public function findAllByLikes()
  {
    $query = $this->getEntityManager()
                    ->createQuery("SELECT s FROM MYMainBundle:Suggestion s
                           WHERE s.status = " . Suggestion::STATUS_OK . " AND s.in_discussion = 0 AND s.archive = 0
                           ORDER BY s.likes DESC");

    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');
    $query->setMaxResults('10');
    return $query->getResult();
  } 
  
   /**
   * 
   * @return type
   */
  public function findAllByForUpdate()
  {
    $query = $this->getEntityManager()
                    ->createQuery("SELECT s FROM MYMainBundle:Suggestion s
                           WHERE s.status = " . Suggestion::STATUS_OK . " AND s.in_discussion = 0 AND s.archive = 0
                           ORDER BY s.likes DESC");

    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');
    return $query->getResult();
  } 
  
  /**
   * 
   * @param type $archive
   */
  public function findAllForSitemap($archive = 0)
  {
    $query = $this->getEntityManager()
                    ->createQuery("SELECT s.slug, s.updated FROM MYMainBundle:Suggestion s
                           WHERE s.in_discussion = 0  AND s.archive = ?1 AND s.status = ?2")
                    ->setParameter(1, $archive)
                    ->setParameter(2, Suggestion::STATUS_OK );

    return $query->getResult();
  }
  
  /**
   * 
   * @param type $archive
   */
  public function findAllDiscForSitemap($archive = 0)
  {
    $query = $this->getEntityManager()
                    ->createQuery("SELECT s.slug, s.updated FROM MYMainBundle:Suggestion s
                           WHERE s.in_discussion = 1 AND s.archive = ?1 AND s.status = ?2")
                    ->setParameter(1, $archive)
                    ->setParameter(2, Suggestion::STATUS_OK );

    return $query->getResult();
  }
  
  /**
   * 
   * @return type
   */
  public function findOneTopBySlug($slug)
  {
    $query = $this->getEntityManager()
            ->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.slug = :slug AND s.in_discussion = 0 AND s.in_top = 1
                           AND s.status = " . Suggestion::STATUS_OK);
    $query->setParameter('slug', $slug);
    
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getSingleResult();
  }
  
  /**
   * 
   * @return type
   */
  public function findOneArchiveBySlug($slug)
  {
    $query = $this->getEntityManager()
            ->createQuery("SELECT s FROM MYMainBundle:Suggestion s 
                           WHERE s.slug = :slug AND s.in_discussion = 0 AND s.archive = 1
                           AND s.status = " . Suggestion::STATUS_OK);
    $query->setParameter('slug', $slug);
    
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getSingleResult();
  }

}
