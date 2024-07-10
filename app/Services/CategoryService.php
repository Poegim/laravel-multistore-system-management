<?php

namespace App\Services;

use App\Repositories\CategoryRepository\CategoryRepositoryInterface;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository
    ) {}

    public function store(array $data) {
        return $this->categoryRepository->store($data);
    }

    public function update(array $data, $id)
    {
        return $this->categoryRepository->update($data, $id);
    }

}