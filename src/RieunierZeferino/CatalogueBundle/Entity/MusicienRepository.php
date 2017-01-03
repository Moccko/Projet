<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MusicienRepository extends EntityRepository
{
    public function count()
    {
        $qb = $this->createQueryBuilder('a');
        $qb->select('COUNT(a)');
        return $qb->getQuery()->getSingleScalarResult();
    }
}
