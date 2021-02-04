<?php


namespace App\Repositories;


use Doctrine\ORM\EntityManagerInterface;
use UnexpectedValueException;

interface BaseRepository
{

    /**
     * @param string $id
     *
     * @return boolean
     */
    public function delete($id);


    /**
     * @param object $entity
     *
     * @return object
     */
    public function save($entity);


    /**
     * @param array $entities
     * @return boolean
     */
    public function saveAll(array $entities);


    /**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed $id The identifier.
     *
     * @return object|null The object.
     */
    public function find($id);


    /**
     * Finds all objects in the repository.
     *
     * @return object[] The objects.
     */
    public function findAll();

    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param mixed[] $criteria
     * @param string[]|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return object[] The objects.
     *
     * @throws UnexpectedValueException
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null);

    /**
     * Finds a single object by a set of criteria.
     *
     * @param mixed[] $criteria The criteria.
     *
     * @return object|null The object.
     */
    public function findOneBy(array $criteria);


    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager();

}
