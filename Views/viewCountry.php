<?php
$this->_pageTitle = 'Pays';
foreach ($countries as $country) : ?>
    <h2 class="subtitle"><?= $country->getName() ?></h2>
    <ul>
        <li><?= $country->getCapital() ?></li>
        <li><?= $country->getAge() ?></li>
        <li><?= $country->getGovernment() ?></li>
        <li><?= $country->getEconomicPower() ?></li>
        <li><?= $country->getMilitaryPower() ?></li>
        <img src="<?= $country->getMap() ?>" alt="carte du pays" style="height: 30%; width: 70%;">
    </ul>

<?php endforeach; ?>