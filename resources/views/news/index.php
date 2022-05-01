<?php foreach ($categoryList as $data): ?>
    <a href="/news/category<?= $data['id'] ?>"><h2><?= $data['title'] ?></h2></a>
<?php endforeach ?>
