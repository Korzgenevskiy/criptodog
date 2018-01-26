<p>Главная страница</p>
<ul>
    <?php foreach ($vars['articles'] as $article) { ?>
    <li><?php echo $article['title']; ?></li>
    <?php } ?>
</ul>