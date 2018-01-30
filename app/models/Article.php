<?php

namespace app\models;

use app\core\Model;

class Article extends Model {
    
    /**
     * 
     * @return type
     */
    public function getArticles()
    {
        return $this->db->fetchAll('select * from articles;');
    }
    
    /**
     * 
     * @param int $articleId
     * @return type
     */
    public function getArticle(int $articleId = 1)
    {
        return $this->db->fetchArray('select * from articles where id = ' . $articleId.';');
    }
    
    /**
     * 
     * @return type
     */
    public function getLastArticle()
    {
        return $this->db->fetchRow('select * from articles as a order by a.id desc limit 1;');
    }
    
}
