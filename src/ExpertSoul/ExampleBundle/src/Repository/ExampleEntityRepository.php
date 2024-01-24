<?php

namespace App\ExpertSoul\ExampleBundle\Repository;

use App\ExpertSoul\ExampleBundle\Entity\RootEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExampleEntity>
 *
 * @method ExampleEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExampleEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExampleEntity[]    findAll()
 * @method ExampleEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExampleEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExampleEntity::class);
    }

//    /**
//     * @return ExampleEntity[] Returns an array of ExampleEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ExampleEntity
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
