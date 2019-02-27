<?php
/**
 * Created by PhpStorm.
 * User: Mejri Dorra
 * Date: 11/14/2018
 * Time: 10:18 PM
 */

namespace AmendesBundle\Entity;


use Doctrine\ORM\EntityRepository;

class AmendeRepositery extends EntityRepository
{
    public function findByPayee($payee){
        $query=$this->getEntityManager()
            ->createQuery("SELECT a FROM AmendesBundle:amende a WHERE a.payee=:payee")
            ->setParameter('payee',$payee);
        return $query->getResult();
    }
    public function findByAmende(){
        $query=$this->getEntityManager()
            ->createQuery("SELECT a FROM AmendesBundle:amende a WHERE a.payee ='non' AND DATE_ADD (a.date ,90, 'day') < CURRENT_DATE()");
        return $query->getResult();
    }

}