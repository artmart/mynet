<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RealtyRepository extends EntityRepository
{

  public function findAllLegislations()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.type=1 and n.status=1 and n._date > \'2013-01-01\' ORDER BY n._date DESC');


    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
  public function findAllDealings()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.type=2 and n.status=1 and n._date > \'2013-01-01\' ORDER BY n._date DESC');


    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
   public function findAllRegistrations()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.type=3 and n.status=1 and n._date > \'2013-01-01\' ORDER BY n._date DESC');
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
  public function findAllRents()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.type=4 and n.status=1 ORDER BY n._date DESC');
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
  public function findAllConsultations()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.type=5 and n.status=1 ORDER BY n._date DESC');
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }

  public function findOneBySlug($slug)
  {
    $em = $this->getEntityManager();
    $res = $em->createQuery("SELECT n FROM MYMainBundle:Realty n WHERE n.slug = :slug");
    $res->setParameters(array('slug' => $slug));
    //$res->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $res->getResult();
  }

  public function findAllRealtyArchive()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n._date < \'2013-01-01\' ORDER BY n._date DESC');
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }

  public function findAllHomepageRealty()
  {
    $query = $this->getEntityManager()
            ->createQuery('SELECT n FROM MYMainBundle:Realty n WHERE n.homepage_status = 1
			ORDER BY n.created DESC');
    $query->setMaxResults(10);
    //$query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker');

    return $query->getResult();
  }
  
  
  
}