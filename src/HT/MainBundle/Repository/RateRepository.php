<?php

namespace HT\MainBundle\Repository;

use HT\MainBundle\Entity\Product;

/**
 * RateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RateRepository extends \Doctrine\ORM\EntityRepository
{
  public function findAvgpRate(\HT\MainBundle\Entity\Product $product) {
     $query = $this->getEntityManager()->createQuery(
       'SELECT AVG(r.rate)
       FROM HT\MainBundle\Entity\Rate r
       WHERE r.product = :product'
     )->setParameter( 'product', $product );

     return $query->execute();
  }
}
