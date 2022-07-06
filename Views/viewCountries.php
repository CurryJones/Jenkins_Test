<?php
foreach ($countries as $country) : ?>
    <h2><?= $country->getName() ?></h2>
    <ul>
        <li><?= $country->getCapital() ?></li>
        <li><?= $country->getAge() ?></li>
        <li><?= $country->getGovernment() ?></li>
        <li><?= $country->getEconomicPower() ?></li>
        <li><?= $country->getMilitaryPower() ?></li>
        <li><?= $country->getMap() ?></li>
    </ul>

<?php endforeach; ?>