<?php


namespace App\Repositories;


use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use LaravelDoctrine\ORM\IlluminateRegistry;

abstract class DefaultRepository implements BaseRepository
{

    /**
     * @var ObjectRepository $entityRepository
     */
    private ObjectRepository $entityRepository;

    /**
     * @var ?ObjectManager $entityManager ;
     */
    private ?ObjectManager $entityManager;

    /**
     * @var IlluminateRegistry
     */
    private IlluminateRegistry $illuminateRegistry;

    public abstract function getEntityClass(): string;

    public function setter(IlluminateRegistry $illuminateRegistry)
    {
        $entityClass = $this->getEntityClass();
        if (!$entityClass) {
            throw new InvalidRepositoryException("invalid repository setting repository static property entityClass");
        }
        if (!empty($this->illuminateRegistry)) {
            throw new InvalidRepositoryException("setter only one");
        }
        $this->illuminateRegistry = $illuminateRegistry;
    }

    /* public function setter(EntityManagerInterface $entityManager)
     {
         $entityClass = $this->getEntityClass();
         if (!$entityClass) {
             throw new InvalidFilterException("invalid repository setting repository static property entityClass");
         }
         if (!empty($this->entityManager)) {
             throw new InvalidFilterException("setter only one");
         }
         $this->entityManager = $entityManager;
         $this->entityRepository = $this->entityManager->getRepository($entityClass);
     }*/


    public function find($id)
    {
        return $this->getEntityRepository()->find($id);
    }

    public function findAll()
    {
        return $this->getEntityRepository()->findAll();
    }

    public function findBy(
        array $criteria,
        ?array $orderBy = null,
        $limit = null,
        $offset = null
    )
    {
        return $this->getEntityRepository()->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria)
    {
        return $this->getEntityRepository()->findOneBy($criteria);
    }

    public function getClassName()
    {
        return $this->getEntityRepository()->getClassName();
    }

    public function delete($id)
    {
        $entity = $this->find($id);
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
        return true;
    }

    public function save($entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
        return $entity;
    }

    public function saveAll(array $entities)
    {
        foreach ($entities as $entity) {
            $this->getEntityManager()->persist($entity);
        }
        $this->getEntityManager()->flush();
        return true;
    }

    public function getEntityManager()
    {
        if (empty($this->entityManager)) {
            $this->entityManager = $this->illuminateRegistry->getManagerForClass($this->getEntityClass());
        }
        return $this->entityManager;
    }

    protected function getEntityRepository()
    {
        if (empty($this->entityRepository)) {
            $this->entityRepository = $this->illuminateRegistry->getManagerForClass($this->getEntityClass())->getRepository($this->getEntityClass());
        }
        return $this->entityRepository;
    }
}
