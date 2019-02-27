<?php

namespace JobpostsBundle\Repository;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * AnnoncesPostsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnoncesPostsRepository extends \Doctrine\ORM\EntityRepository
{



    public function findbest()
    {
        $query = $this->getEntityManager()->createQuery("SELECT strtodate(p.datedebut, '%Y/%m/%d') FROM JobpostsBundle:AnnoncesPosts p ");
        return $query->getResult();
    }

}
