<?php

namespace App\Repository;

use App\Entity\SmallSliderTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SmallSliderTwo|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmallSliderTwo|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmallSliderTwo[]    findAll()
 * @method SmallSliderTwo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmallSliderTwoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SmallSliderTwo::class);
    }

//    /**
//     * @return SmallSliderTwo[] Returns an array of SmallSliderTwo objects
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
    public function findOneBySomeField($value): ?SmallSliderTwo
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
