<?php

    //Dependency injection PHP

require 'post.php';
require 'category.php';

$post = new post(new category);
$category = new category();

echo $post->getAll();
echo $post->getCategoriesFromPost();