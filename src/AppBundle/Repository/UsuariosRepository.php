<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UsuariosRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT id,nombre FROM Usuarios  ORDER BY id DESC'
            )
            ->getResult();
    }
}