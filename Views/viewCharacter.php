<?php
$this->_pageTitle = 'Personnages';
foreach ($characters as $character) : ?>
    <h2 class="subtitle"><?= $character->getFirstname() ?></h2>
    <ul>
        <li><?= $character->getName() ?></li>
        <li><?= $character->getTitle() ?></li>
        <li><?= $character->getAge() ?></li>
        <li><?= $character->getCountry() ?></li>
        <li><?= $character->getAura() ?></li>
    </ul>

<?php endforeach; ?>