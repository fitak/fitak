<?php

namespace Fitak;

use Nextras\Orm\Repository\Repository;


class PostsRepository extends Repository
{
    function getPost($id) {
        $post = $this->getById($id);
        while($post->parent !== NULL) {
            $post = $post->parent;
        }

        return $post;
    }
}
