<?php
namespace App\repositories;

use App\Models\Category;


class CategoryRepository extends BaseRepository
{
    

    public function __construct(Category $cat)
    {
        $this->model = $cat;
    }

  
}