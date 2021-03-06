<?php

namespace CvBundle\Repository;

/**
 * FormationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationsRepository extends \Doctrine\ORM\EntityRepository
{
    public function order($id)
    {

        $query  = $this->getEntityManager()->createQuery("SELECT C FROM CvBundle:Formations C WHERE C.user= :id ")
            ->setParameter(':id',$id);
        return $query->getResult();
    }
}
