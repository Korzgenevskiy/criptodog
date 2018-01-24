<p>Главная страница</p>
<ul>
    <?php foreach ($data['articles'] as $article) { ?>
    <li><?php echo $article['title']; ?></li>
    <?php } ?>
</ul>