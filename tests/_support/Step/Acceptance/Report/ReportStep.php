<?php
namespace Step\Acceptance\Report;

class ReportStep extends \AcceptanceTester
{   
    /**
 * @When user clicks on :arg1 Report
 */
 public function userClicksOnReport($ReportName)
 { 
     $this->clickOnReport($ReportName);  
 }

/**
 * @Then user is able to see :arg1 Heading on modal window
 */
 public function userIsAbleToSeeHeadingOnModalWindow($BreadCrumbText)
 { 
     $this->VerifybreadCrumbTextLink($BreadCrumbText);
 }

/**
 * @Then user is able to see :arg1  of report on modal window of report
 */
 public function userIsAbleToSeeOfReportsOnModalWindowOfReport($ReportTitle)
 { 
    $this->verifyTitle($ReportTitle); 
 }

/**
 * @Then user is able to see help icon on Outcome Comparison Report modal window
 */
 public function userIsAbleToSeeHelpIconOnOutcomeComparisonReportModalWindow()
 { 
     $this->verifyHelpIconOnModalWindow();
     
 } 

/**
 * @Then user is able to see close window icon
 */
 public function userIsAbleToSeeCloseWindowIcon()
 { 
     $this->VerifyCloseWindowIcon();
 }

 /**
  * @Then user is able to see :arg1 radio button on Outcome Comparison Report
  */
  public function userIsAbleToSeeRadioButtonOnOutcomeComparisonReport($RadioButtonType)
  {
   $this->verfiyRadioOption($RadioButtonType);
 }

/**
 * @When user hover over the help icon on Outcome Comparison Report
 */
 public function userHoverOverTheHelpIconOnOutcomeComparisonReport()
 {
   $this->hoverOverHelpIcon();
}

/**
 * @Then user is able to see :arg1 and :arg2 on help popup
 */
 public function userIsAbleToSeeAndOnHelpPopup($Title,$Text)
 { 
     $this->VerfiyHelpTextAndTitle($Title,$Text);
 }

 /**
 * @When user selects :arg1 on Outcome Comparison Report
 */
 public function userSelectsOnOutcomeComparisonReport($Option)
 { 
     $this->SelectOptionFromOutcomeReportModalWindow($Option);
 }

/**
 * @When user clicks on continue button on report modal window
 */
 public function userClicksOnContinueButton()
 { 
     $this->clickOnContinueButton();
 }

/**
 * @Then user is able to see list of ISPs
 */
 public function userIsAbleToSeeListOfISPs(\Behat\Gherkin\Node\TableNode $TableOfProfile)
 { 
     $this->VerifyListOfProfiles($TableOfProfile);
 }

/**
 * @Then user is able to see Search bar
 */
 public function userIsAbleToSeeSearchBar()
 { 
     $this->VerifySearchBar();
 }
 /**
 * @When user clicks on go back link report modal window
 */
 public function userClicksOnGoBackLink()
 {
     $this->clickonGoBackButton();
 }
  /**
  * @When user searchs for :arg1 ISP in search field
  */
  public function userSearchsForISPInSearchField($SearchTerm)
  { 
      $this->SearchInSearchbar($SearchTerm);
  } 

 /**
  * @Then user is able to see :arg1 profile Block
  */
  public function userIsAbleToSeeProfileBlock($ProfileBlock)
  {
  $this->VerifyProfileBlock($ProfileBlock);
 }
  /**
  * @Then user is not able to see other Profile blocks
  */
  public function userIsNotAbleToSeeOtherProfileBlocks(\Behat\Gherkin\Node\TableNode $TableOfProfile)
  {
    $this->VerifyAbsenceOfProfileBlocks($TableOfProfile);
  }
 /**
 * @When user selects ISP :arg1 under profile Block :arg2
 */
 public function userSelectsISPUnderProfileBlock($ProfileItem,$ProfileBlock)
 { 
     $this->SelectProfileItem($ProfileItem,$ProfileBlock);
 }

/**
 * @Then user is able to see subpopulation textfields
 */
 public function userIsAbleToSeeSubpopulationTextfields()
 { 
     $this->VerifySubPopulationTextFields();
 }
 
 /**
 * @When user fills subpopulation :arg1 in :arg2 on Outcome Report modal Window
 */
 public function userFillsSubpopulationInOnOutcomeReportModalWindow($Text,$SubPopulationField)
 { 
     $this->fillSubpopulationField($Text,$SubPopulationField);
 }

/**
 * @Then user is able to see only fifty character in :arg1
 */
 public function userIsAbleToSeeOnlyFiftyCharacterIn($SubPopulationField)
 {
  $this->VerifyCharacterLengthInSubpopulationField($SubPopulationField);
} 
/**
 * @When user clicks on breadcrumb :arg1 link on report modal window
 */
 public function userClicksOnBreadcrumbLinkOnReportModalWindow($Heading)
 {

     $this->ClickOnBreadCrumbHeadingLink($Heading);
     
 }
 /**
  * @Then user is able to see list of Surveys under year :arg1
  */
  public function userIsAbleToSeeListOfSurveysUnderYear($yearID,\Behat\Gherkin\Node\TableNode $TableOfSurveys)
  {

   $this->VerifySurveys($yearID,$TableOfSurveys);
     
  }
  /**
 * @When user clicks on :arg1 under :arg2 in year :arg3
 */
 public function userClicksOnUnderInYear($SurveyName,$SurveyType,$yearId)
 { 
     $this->SelectSurvey($SurveyName,$SurveyType,$yearId);
 }

/**
 * @Then user is able to see survey questions
 */
 public function userIsAbleToSeeSurveyQuestions(\Behat\Gherkin\Node\TableNode $SurveyQuestion)
 { 
     $this->VerifySurveyQuestion($SurveyQuestion);
 }
  /**
 * @When user selects question :arg1
 */
 public function userSelectsQuestion($Question)
 {
   $this->SelectQuestion($Question);
 }
 
 /**
 * @Then user is able to see an error with message :arg1 on outcome report modal window
 */
 public function userIsAbleToSeeAnErrorWithMessageOnOutcomeReportModalWindow($ErrorMessage)
 {
$this->SeeErrorMessageOnReportModalWindow($ErrorMessage); 
 }
 /**
  * @When user selects :arg1 for subpopulationOne
  */
  public function userSelectsForSubpopulationOne($Value)
  { 
      $this->selectSubpopulationOption($Value,1);
  }

 /**
  * @Then user is able to see :arg1 disabled for subpopulationTwo
  */
  public function userIsAbleToSeeDisabledForSubpopulationTwo($Value)
  { 
      $this->VerifyDisabledValue($Value,2);
  }

  
  //////////////////////////////////////////////////////////////////////////////////////////////// 
  public function selectSubpopulationOption($value,$Subpopulation ) {
     $I=$this;
     if($Subpopulation==1)
     {   $I->waitForElement(str_replace("{{}}",$value,$I->Element("SubPopulation1CheckBox","ReportPage")));
         $I->click(str_replace("{{}}",$value,$I->Element("SubPopulation1CheckBox","ReportPage")));
         
     }
     else
     {
         $I->waitForElement(str_replace("{{}}",$value,$I->Element("SubPopulation2CheckBox","ReportPage")));
         $I->click(str_replace("{{}}",$value,$I->Element("SubPopulation2CheckBox","ReportPage")));
        
     }
  }
  
  public function VerifyDisabledValue($Value,$Subpopulation)
  {
      $I=$this;
      $I->wait(3);
      if($Subpopulation==1){
       $I->canSeeElementInDOM(str_replace("{{}}",$Value,$I->Element("DisabledInputForSubPoulation1","ReportPage")));
      }
      else{ 
        
      $I->canSeeElementInDOM(str_replace("{{}}",$Value,$I->Element("DisabledInputForSubPoulation2","ReportPage")));
      }
     
  }
  
  
  
public function SeeErrorMessageOnReportModalWindow($ErrorMessage)
{
   $I=$this;
   $I->canSee($ErrorMessage);
    
}
 
 
 
 public function SelectQuestion($Question)
{
  $I=$this;
  $I->click(str_replace("{{}}",$Question,$I->Element("Question","ReportPage")));
  
}
 public function SelectSurvey($SurveyName,$SurveyType,$yearId)
{
    $I=$this;
   
    $I->waitForElement(str_replace("{{}}", $yearId,  str_replace("<<>>",$SurveyType,$I->Element("SurveyType","ReportPage"))));
    $I->click(str_replace("{{}}",$yearId,  str_replace("<<>>",$SurveyType,$I->Element("SurveyType","ReportPage"))));
    $I->waitForElement(str_replace("{{}}", $SurveyType,  str_replace("<<>>",$SurveyName,$I->Element("SurveyName","ReportPage"))));
    $I->click(str_replace("{{}}", $SurveyType,  str_replace("<<>>",$SurveyName,$I->Element("SurveyName","ReportPage"))));
    
}
 
 
 
 
 public function VerifySurveyQuestion(\Behat\Gherkin\Node\TableNode $SurveyQuestion)
 {
      $I=$this;
     $SurveyArray=$SurveyQuestion->getRows();
     for($i=0;$i<count($SurveyArray);$i++)
     {
       for($j=0;$j<count($SurveyArray[$i]);$j++)  
       {
$I->canSee($SurveyArray[$i][$j]);
           } 
     }
      
     
 }
 
 
  public function VerifySurveys($yearID,$TableOfSurveys)
  {
      $I=$this;
      $I->canSeeElement(str_replace("{{}}",$yearID,$I->Element("Year","ReportPage")));
      $I->click(str_replace("{{}}",$yearID,$I->Element("Year","ReportPage")));
      $I->VerfiySurveys($yearID,$TableOfSurveys);
      
  }
  
  public function VerfiySurveys($yearID,$TableOfSurveys)
  {
     $I=$this;
     $SurveyArray=$TableOfSurveys->getRows();
     for($i=0;$i<count($SurveyArray);$i++)
     {
       for($j=0;$j<count($SurveyArray[$i]);$j++)  
       {
           $I->canSeeElement(str_replace("{{}}",$yearID,  str_replace("<<>>",$SurveyArray[$i][$j],$I->Element("SurveyType","ReportPage"))));
                   
           
       }
     }
     
      
      
  }
  
  
  public function ClickOnBreadCrumbHeadingLink($Heading)
{
    $I=$this;
    $I->click(str_replace("{{}}",$Heading,$I->Element("breadCrumbTextLink","ReportPage")));
    $I->WaitForPageToLoad($I);
    
}
 
 
 public function VerifyCharacterLengthInSubpopulationField($SubPopulationField) {
        $I = $this;
        if (strpos($SubPopulationField, '1') !== false) {
            $Text = $I->grabValueFrom(str_replace("{{}}", "1", $I->Element("SubpopulationNameField", "ReportPage")));
        } else {

            $Text = $I->grabValueFrom(str_replace("{{}}", "2", $I->Element("SubpopulationNameField", "ReportPage")));
        }

        $I->assertEquals(strlen($Text), 50);
    }

    public function fillSubpopulationField($Text,$SubPopulationField)
{
    $I=$this;
    if(strpos($SubPopulationField,"1")!==false)
    {
       $I->fillField(str_replace("{{}}","1",$I->Element("SubpopulationNameField","ReportPage")),$Text);
    }
 else {
       $I->fillField(str_replace("{{}}","2",$I->Element("SubpopulationNameField","ReportPage")),$Text);
    }
}
 
 
 
 public function VerifySubPopulationTextFields()
{    $I=$this;
    $I->canSeeElement(str_replace("{{}}",'1',$I->Element("SubpopulationNameField","ReportPage")));
    $I->canSeeElement(str_replace("{{}}",'2',$I->Element("SubpopulationNameField","ReportPage")));
    
}
 
 
 public function SelectProfileItem($ProfileItem,$ProfileBlock)
 {
     $I=$this;
     $I->SelectProfileBlock($ProfileBlock);
     $I->click(str_replace("{{}}",$ProfileBlock,  str_replace("<<>>",$ProfileItem,$I->Element("ProfileItem","ReportPage"))));
     
 }
 
 public function SelectProfileBlock($ProfileBlock)
 { 
   $I=$this;
   $I->click(str_replace("{{}}",$ProfileBlock,$I->Element("ProfileBlock","ReportPage")));
   
 }
 
 public function VerifyAbsenceOfProfileBlocks($TableOfProfile)
  {
       $I=$this;
     $ProfileArray=$TableOfProfile->getRows();
     for($i=0;$i<count($ProfileArray);$i++)
     {
       for($j=0;$j<count($ProfileArray[$i]);$j++)  
       {
          $I->VerifyAbsenceProfileBlock($ProfileArray[$i][$j]);           
       }
     }
     
      
  }
  
   public function VerifyAbsenceProfileBlock($ProfileBlock)
 {
 $I=$this;
 $I->cantSeeElement(str_replace("{{}}",$ProfileBlock,$I->Element("ProfileBlock","ReportPage"))); 
 }
 
  
  
  public function SearchInSearchbar($SearchTerm)
  {
      $I=$this;
      $I->fillField($I->Element("SearchBar","ReportPage"),$SearchTerm);
      $I->click($I->Element("SearchIcon","ReportPage"));
      $I->wait(3);
      
  }
  
  public function clickonGoBackButton()
 {
     
     $I=$this;
     $I->click($I->Element("GoBack","ReportPage"));
     $I->WaitForPageToLoad($I);
 }
 
 
 public function VerifySearchBar()
 {
    $I=$this;
    $I->canSeeElement($I->Element("SearchBar","ReportPage"));
    $I->canSeeElement($I->Element("SearchIcon","ReportPage"));
    
     
 }
 
 public function VerifyListOfProfiles($TableOfProfile)
 {  
     $I=$this;
     $ProfileArray=$TableOfProfile->getRows();
     for($i=0;$i<count($ProfileArray);$i++)
     {
       for($j=0;$j<count($ProfileArray[$i]);$j++)  
       {
          $I->VerifyProfileBlock($ProfileArray[$i][$j]);           
       }
     }
     
     
 }
 
 public function VerifyProfileBlock($ProfileBlock)
 {
 $I=$this;
 $I->canSeeElement(str_replace("{{}}",$ProfileBlock,$I->Element("ProfileBlock","ReportPage"))); 
 }
 
 
 
 public function clickOnContinueButton()
 {
     $I=$this;
     $I->click($I->Element("Continue","ReportPage"));
     $I->WaitForPageToLoad($I);
     
 }
 
 public function SelectOptionFromOutcomeReportModalWindow($Option)
 {
     $I=$this;
     $I->click(str_replace("{{}}",$Option,$I->Element("SelectOption","ReportPage")));
     
     
 }
 
 
 
 
 public function hoverOverHelpIcon()
 {
    $I=$this;
    $I->moveMouseOver($I->Element("helpIcon","ReportPage"));
     
 }
 
 public function VerfiyHelpTextAndTitle($Title,$Text)
 {
     $I=$this;
     $I->canSeeElement(str_replace("{{}}",$Title,$I->Element("HelpPopupTitle","ReportPage")));
     $I->canSee($Text);
     
 }
  public function verfiyRadioOption($RadioButtonType)
  {
      $I=$this;
      $I->canSeeElement(str_replace("{{}}",$RadioButtonType,$I->Element("SelectOption","ReportPage")));
      
  }
 public function clickOnReport($ReportName)
    {
        $I=$this;
        $I->click(str_replace("{{}}",$ReportName,$I->Element("ReportLink","ReportPage")));
        $I->WaitForModalWindowToAppear($I);
        
    }
   
    public function SelectOutComeReportsOption($arg)
    {
        $I=$this;
        $I->click(str_replace("{{}}",$arg,$I->Element("","")));
        
    }
    
    public function verifyTitle($Title)
    {
        $I=$this;
        $I->canSee($Title,$I->Element("NameOfReportOnModalWindow","ReportPage"));
         
    }
    
    public function VerifybreadCrumbTextLink($BreadCrumbText)
    {
        $I=$this;
        $I->canSeeElement(str_replace("{{}}",$BreadCrumbText,$I->Element("breadCrumbTextLink","ReportPage")));
        
    }
    
    public function verifyHelpIconOnModalWindow()
    {
        $I=$this;
        $I->canSeeElement($I->Element("helpIcon","ReportPage"));
    }
    
    public function VerifyCloseWindowIcon()
    {
        $I=$this;
        $I->canSeeElement($I->Element("CloseModalWindow","ReportPage"));
    }
    
    
}