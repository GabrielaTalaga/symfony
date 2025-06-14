<?php

namespace App\Repository;

use App\Entity\Avatar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avatar>
 */
class AvatarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avatar::class);
    }

    /**
     * Save Avatar entity to the database.
     *
     * @param Avatar $avatar
     * @param bool $flush Whether to flush immediately (default: true)
     */
    public function save(Avatar $avatar, bool $flush = true): void
    {
        $this->getEntityManager()->persist($avatar);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }



    public function remove(Avatar $avatar, bool $flush = true): void
    {
        $this->getEntityManager()->remove($avatar);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

}
