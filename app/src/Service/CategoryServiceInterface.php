<?php

namespace App\Service;

use App\Entity\Category;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Interface CategoryServiceInterface.
 */
interface CategoryServiceInterface
{
    /**
     * Returns all categories.
     *
     * @return Category[]
     */
    public function getAll(): array;

    /**
     * Returns a single category by ID.
     *
     * @param int $id
     *
     * @return Category|null
     */
    public function getOne(int $id): ?Category;


    /**
     * Save entity.
     *
     * @param Category $category Category entity
     */
    public function save(Category $category): void;



    public function getPaginatedList(int $page): PaginationInterface;

    /**
     * Delete entity.
     *
     * @param Category $category Category entity
     */
    public function delete(Category $category): void;



    /**
     * Can Category be deleted?
     *
     * @param Category $category Category entity
     *
     * @return bool Result
     */
    public function canBeDeleted(Category $category): bool;

}
