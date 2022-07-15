<?php
$this->_pageTitle = 'Courants';
foreach ($flows as $flow) : ?>
    <h2><?= ($flow->getName()) ?></h2>
    <ul>
        <li><?= $flow->getCategory() ?></li>
        <li><?= $flow->getElement() ?></li>
    </ul>

<?php endforeach; ?>