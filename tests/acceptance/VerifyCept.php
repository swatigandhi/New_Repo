<?php 
$I = new AcceptanceTester($scenario);
include("file1.php");
include("file2.php");
//$I->amOnUrl("https://mapworks-uat.skyfactor.com/#/login");
//$I->wait(2);
//$I->fillField('#email', 'qanupur@mailinator.com');
//$I->fillField('#pwd', 'Qait@123');
//$I->click('.//*[@id=\'faculty_login\']/form/button');
//$I->wait(5);
//$I->dontSee('We can\'t sign you in, your email address and password do not match.');
//$I->seeInTitle('Mapworks - Overview');
//$I->seeInCurrentUrl('#/overview');

//$json = file_get_contents('tests\_data\scenarios\acceptance\new.json');
//$json_data = json_decode($json,True);
//echo $json_data->key;
//$cars = array("Volvo", "Maruti", "Toyota");
//$json_data1= json_encode($cars);
//file_put_contents('tests\_data\scenarios\acceptance\new.json', $json_data1);
//exit;
// $json = file_get_contents('tests\_data\scenarios\acceptance\new.json');
// $json_data = json_decode($json,FALSE);
//  
//    foreach($json_data as $key => $val)
//   {
//        echo $key;
//        echo '<br>';
//    }

    //}
//}
// $json_data->campusConnectionNames[2] = "sneha Gandhi";
//$newJsonString = json_encode($json_data,JSON_PRETTY_PRINT);
//file_put_contents('tests\_data\scenarios\acceptance\new.json', $newJsonString);
 
$as=new cat\A();
$bs=new ball\A();
codecept_debug("Its name is ". get_class($as));
$as->name();
codecept_debug($as->read());
codecept_debug($bs->read());

