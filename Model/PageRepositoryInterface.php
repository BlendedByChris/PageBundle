<?php

namespace Bundle\PageBundle\Model;

interface PageRepositoryInterface extends RepositoryInterface {

    /**
     * Finds one post by its id
     *
     * @param integer $id
     * @return Page or NULL whether the specified id does not match any page
     */
    public function findOneById($id);

    /**
     * Finds one post by its url
     *
     * @param integer $id
     * @return Post or NULL whether the specified id does not match any page
     */
    public function findOneByUrl($url);

}