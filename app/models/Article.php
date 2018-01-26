<?php

namespace app\models;

use app\core\Model;

class Article extends Model {
    
    public function getArticles()
    {
        return $this->db->fetchAll('select * from articles;');
    }
    
    public function getArticle()
    {
        $articleId = 4;
        return $this->db->fetchAll('select * from articles where id ='. $articleId);
    }
    
    public function getLastArticle()
    {
        return $this->db->fetchOne('select * from articles;');
    }
    
}
