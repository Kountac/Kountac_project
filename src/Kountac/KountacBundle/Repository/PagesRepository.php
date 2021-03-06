<?php

namespace Kountac\KountacBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PagesRepository extends EntityRepository
{    
    
    public function getInfos() 
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.categorie = :cat')
                ->setParameter('cat', 'information');
        return $qb->getQuery()->getResult();
    }
    
    public function getAide() 
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.categorie = :cat')
                ->setParameter('cat', 'aide');
        return $qb->getQuery()->getResult();
    }
    
    public function getOne($valeur) 
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.lien = :cat')
                ->setParameter('cat', $valeur);
        return $qb->getQuery()->getResult();
    }
}
