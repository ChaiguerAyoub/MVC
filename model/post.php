<?php


class post extends Model{

    /**
     * Fetch a post by its ID and return it
     * @param $id
     * @return stdClass
     */
    public function getPost($id){
        if(!isset($post))
            $post = new \stdClass();

        $post->id = 20;
        $post->owner = "Jhon Doe";
        $post->tags = ['PHP 7','PHPStorm','Tech'];

        return $post;
    }


}