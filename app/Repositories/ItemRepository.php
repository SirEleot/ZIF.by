<?php
    namespace App\Repositories;

    use App\Models\Item as Model;
    use Illuminate\Database\Eloquent\Collection;
    /**
     * undocumented class
     */
    class ItemRepository extends BaseRepository
    {
        private $pages = 9;
        
        protected function getModelClass(){
            return Model::class;
        }

        public function getAllWithPaginate()
        {
            return $this->startConditions()
                ->select('name', 'id', 'price', 'image', 'description')
                ->with('category')
                ->paginate($this->pages);
        }
        
        public function getByCategories($categories)
        {
            return $this->startConditions()
                ->where('category_id', $categories)
                ->select('name', 'id', 'price', 'image')
                ->with('category')
                ->paginate($this->pages);
        }
    }
    
?>
