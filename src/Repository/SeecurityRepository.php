<?php

namespace App\Repository;

use App\Entity\Seecurity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Seecurity>
 *
 * @method Seecurity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Seecurity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Seecurity[]    findAll()
 * @method Seecurity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeecurityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seecurity::class);
    }

//    /**
//     * @return Seecurity[] Returns an array of Seecurity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Seecurity
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
