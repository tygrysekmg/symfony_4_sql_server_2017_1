<?php

namespace App\Repository;

use App\Entity\Grzegorz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Grzegorz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grzegorz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grzegorz[]    findAll()
 * @method Grzegorz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrzegorzRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Grzegorz::class);
    }

//    /**
//     * @return Grzegorz[] Returns an array of Grzegorz objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Grzegorz
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
