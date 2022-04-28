<?php

namespace App\Services;

use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    private $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        return $this->categoryRepo->getLatestCategory();
    }
}