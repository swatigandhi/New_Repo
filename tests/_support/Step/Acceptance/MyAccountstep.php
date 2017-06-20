<?php

namespace Step\Acceptance;

class MyAccountstep extends \AcceptanceTester {

   
 /**
     * @When user clicks on Change password link
     */
     public function userClicksOnChangePasswordLink()
     {
        $this->ClickOnChangePasswordLink();
     }

    /**
     * @When user fills :arg1 as new password
     */
     public function userFillsAsNewPassword($password)
     {
        $this->FillNewPassword($password);
     }

    /**
     * @When user fills :arg1 as confirm password
     */
     public function userFillsAsConfirmPassword($password)
     {
         $this->FillConfirmPassword($password);
     }

    /**
     * @When user clicks on save button to update the account
     */
     public function userClicksOnSaveButtonToUpdateTheAccount()
     {
        $this->ClickOnSaveButtonToUpdateAccount();
     }

 /**
     * @When user fills :arg1 as mobile number
     */
     public function userFillsAsMobileNumber($MobileNumber)
     {
        $this->FillMobileNumber($MobileNumber);
     }

    /**
     * @Then user is able to see updated mobile number in the textbox
     */
     public function userIsAbleToSeeUpdatedMobileNumberInTheTextbox()
     {
        $this->AbleToSeeUpdatedMobileNumberInTextBox();
     }
///////////////////// Implementations ////////////////////////////
     public function ClickOnChangePasswordLink()
     {
         $I = $this;
         $I->click($I->Element("changePassword", "MyAccountPage"));
     }
     public function FillNewPassword($password)
     {
           $I = $this;
           $I->waitForElement($I->Element("newPassword", "MyAccountPage"), 60);
           $I->fillField($I->Element("newPassword", "MyAccountPage"), $password);
     }
     public function FillConfirmPassword($password)
     {
         $I = $this;
         $I->fillField($I->Element("ConfPassword", "MyAccountPage"), $password);
     }
     public function ClickOnSaveButtonToUpdateAccount()
     {
       $I = $this;  
       $I->click($I->Element("Save", "MyAccountPage"));
     }
     
public function FillMobileNumber($MobileNumber)
{
  $I = $this;
  $I->fillField($I->Element("phoneField", "MyAccountPage"), $MobileNumber); 
  $I->writeDataInJson($this, "Phone", $MobileNumber);
}
public function AbleToSeeUpdatedMobileNumberInTextBox()
{
    $I = $this;
    $UpdatedPhone=$I->getDataFromJson($this, "Phone");
    $actualNo=$I->grabValueFrom($I->Element("phoneField", "MyAccountPage"));
    $I->assertEquals($UpdatedPhone, $actualNo);
}
    

}
