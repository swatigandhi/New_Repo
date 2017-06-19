<?php 
$I = new AcceptanceTester($scenario);
$I->amOnUrl("https://www.google.com");
$I->wait(5);
$I->click('#lst-ib');
$I->fillField('#lst-ib', 'def');
$I->click('#_fZl');
$I->wait(2);