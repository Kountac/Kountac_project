<?php

namespace Kountac\ChatBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
/**
 * ProduitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MessageRepository extends EntityRepository
{
    public function getMessage() 
    {
        $qb = $this->createQueryBuilder('m');
               /* ->select('u')
                ->where('u.author = :author')
                ->andWhere('u.recepteur = :recepteur')
                //->orWhere('u.recepteur = :author AND u.author = :recepteur')
                ->setParameter('author', $author)
                ->setParameter('recepteur', $recepteur);*/
        return $qb->getQuery()->getResult();
    }
    
    
   
    
    
}
