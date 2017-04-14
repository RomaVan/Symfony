<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 * @ORM\Table(name="test")
 */
class TestRepository extends EntityRepository
{
    public function findAllPublishedOrderedBySize()
    {
        return $this->createQueryBuilder('test');

    }
}