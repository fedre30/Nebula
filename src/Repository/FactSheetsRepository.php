<?php

namespace App\Repository;

use App\Entity\FactSheets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FactSheets|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactSheets|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactSheets[]    findAll()
 * @method FactSheets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactSheetsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FactSheets::class);
    }

//    /**
//     * @return FactSheets[] Returns an array of FactSheets objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FactSheets
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
