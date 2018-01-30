<p>Главная страница</p>
<ul>
    
   
    <?php foreach ($this->articles as $article) { ?>
    <li >
        <a href ="/article/<?=$article['id']?>" title = "<?= htmlspecialchars ($article['title'])?>" > 
        <?php echo $article['title']; ?>
        </a>    
    </li>
    <?php } ?>
</ul>