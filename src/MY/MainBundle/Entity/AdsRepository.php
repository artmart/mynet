<?php

namespace MY\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * AdsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdsRepository extends EntityRepository
{
  /**
   * 
   * @return type
   */
  public function findRightAds()
  {
    $query = $this->getEntityManager()->createQuery('Select a FROM MYMainBundle:Ads a WHERE a.position=2 ORDER BY a.order_id ASC ');
   
    return $query->getResult();
  }

  /**
   * 
   * @return type
   */
  public function findMainAds()
  {
    $query = $this->getEntityManager()->createQuery('Select a FROM MYMainBundle:Ads a WHERE a.position=3 ORDER BY a.order_id ASC ');
   
    return $query->getResult();
  }
  
  /**
   * 
   * @return type
   */
  public function findLeftAds()
  {
    $query = $this->getEntityManager()->createQuery('Select a FROM MYMainBundle:Ads a WHERE a.position=1 ORDER BY a.order_id ASC ');
   
    return $query->getResult();
  }
 
}