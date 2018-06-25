<?php

namespace App\Repository;

use App\Entity\HomeQuestions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method HomeQuestions|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeQuestions|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeQuestions[]    findAll()
 * @method HomeQuestions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeQuestionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, HomeQuestions::class);
    }

//    /**
//     * @return HomeQuestions[] Returns an array of HomeQuestions objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeQuestions
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
