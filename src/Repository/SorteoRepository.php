<?php

namespace App\Repository;

use App\Entity\Sorteo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sorteo>
 */
/**
 * @method Sorteo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sorteo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sorteo[]    findAll()
 * @method Sorteo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SorteoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sorteo::class);
    }

    public function findLastSorteos(): array
    {
        $conection = $this->getEntityManager()->getConnection();

        $sql = 'SELECT fecha, max(premio) AS "Premio"
                FROM sorteo
                GROUP BY fecha
                ORDER BY FECHA DESC';

        $resultado = $conection->executeQuery($sql);

        return $resultado->fetchAllAssociative();
    }

    public function findNumero(\DateTime $fecha, $numero, $serie): array
    {
        $qb = $this->createQueryBuilder('s')
        ->select('s.fecha', 's.numero', 's.serie', 's.premio')
        ->where('s.fecha = :fecha')
        ->andWhere('s.numero = :numero')
        ->andWhere('s.serie = :serie')
        ->setParameter('fecha', $fecha, \Doctrine\DBAL\Types\Types::DATE_MUTABLE)
        ->setParameter('numero', $numero)
        ->setParameter('serie', $serie);

        $resultado = $qb->getQuery()->getResult();
                

        return $resultado;
    }


//    /**
//     * @return Sorteo[] Returns an array of Sorteo objects
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

//    public function findOneBySomeField($value): ?Sorteo
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
