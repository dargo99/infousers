<?php

class post {

    protected $category;
    public function __construct(category $category) {
        $this->category = $category;
    }

    public function getAll() {
        return "Todos los posts \n";
    }

    public function getCategoriesFromPost() {
        return $this->category->getAll();
        //$this->clase->método
    }
}