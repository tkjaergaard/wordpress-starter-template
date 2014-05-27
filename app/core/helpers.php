<?php

/*
|--------------------------------------------------------------------------
| Get thumbnail url
|--------------------------------------------------------------------------
|
| The the thumnail for a post by it's id.
| A specific size can be provided.
|
*/
if( !function_exists('get_thumb_url') )
{
    function get_thumb_url($size='thumbnail',$id=null)
    {
        $id = $id ?: get_post()->ID;

        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), $size );

        return $thumb['0'];
    }
}