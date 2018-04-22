<?php

namespace App\Repository;

use App\Entity\SmallSliderOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SmallSliderOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmallSliderOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmallSliderOne[]    findAll()
 * @method SmallSliderOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmallSliderOneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SmallSliderOne::class);
    }

//    /**
//     * @return SmallSliderOne[] Returns an array of SmallSliderOne objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SmallSliderOne
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
