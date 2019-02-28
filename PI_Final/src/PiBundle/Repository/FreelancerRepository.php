<?php

namespace PiBundle\Repository;

/**
 * FreelancerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FreelancerRepository extends \Doctrine\ORM\EntityRepository
{

    public function findByName($nom,$travailfait)
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.nom=:Name')
            ->setParameter('Name',$nom)
            ->andWhere('s.nom like :user')
            ->setParameter('user','%s%')
            ->andWhere('s.travailfait=:Travailfait')
            ->setParameter('Travailfait',$travailfait)
            ->orderBy('s.id','DESC');

        return $qb->getQuery()->getResult();
    }

    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT g
                FROM PiBundle:Freelancer g
                WHERE g.nom LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }




    public function findCategorie1()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie=:Categorie')
            ->setParameter('Categorie','Web & Mobile Development');

        return $qb->getQuery()->getResult();
    }

    public function findCategorie2()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie=:Categorie')
            ->setParameter('Categorie','Design, Arts & Multimedia');

        return $qb->getQuery()->getResult();
    }

    public function findCategorie3()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie=:Categorie')
            ->setParameter('Categorie','Writing & Translation');

        return $qb->getQuery()->getResult();
    }


    public function findCategorie4()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie=:Categorie')
            ->setParameter('Categorie','Admin Support');

        return $qb->getQuery()->getResult();
    }
    public function findCategorie5()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.categorie=:Categorie')
            ->setParameter('Categorie','Management & Finance');

        return $qb->getQuery()->getResult();
    }





}