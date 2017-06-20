<?php
namespace Page\Acceptance;

class General
{
    public static $wait=240;
    public static $spinner='#loading-bar-spinner';
    public static $successMsg = "//table[@class='message-modal-window-message-table']//div|//div[@class='message-modal-window-message']/label|//div[@class='modal-body']//p[@class='message-with-icon ng-binding success-message']";
   // public static $ModalWin = '//div[contains(@class,"modal-content")]|//div[contains(@class,"modal")]|//div[contains(@class,"modal-dialog")]|//div[contains(@class,"modal")]/div[@class="modal-body"]';
      public static $ModalWin='//div[contains(@class,"modal-content-container")]|//div[contains(@class,"modal-body")]';
    public static $PleaseWait='//div[contains(@cg-busy,"Please Wait...")]/div[contains(@class,"cg-busy-animation")]';
    
    
    //Upload Lccators
    public static $Upload_Another_File = './/*[@id="mw-upload-details"]/a[@ng-click="nextStep()"]|//button[@ng-click="nextStep()"]';
    public static $Upload_XLS_CSV = './/*[@id="mw-uploadStart"]//a[@ng-click="lookupFiles()"]';
    public static $Upload_Button = '//div[@class="modal-dialog"]//button[@ng-click="confirmUpload()"]|//div[@class="modal-dialog"]//button[@ng-click="processUpload()"]';
    public static $Upload_Progress_Icon = ".//*[@id='mw-upload-progress']";
    public static $Upload_Success_Icon = '//div[contains(@class,"adding-stu-cont")]//p/img[@title="Process Confirmation"]|//img[@title="Process Confirmation"]';
    
    public static $Upload_Button_In_Group='//div[@class="modal-dialog"]//button[@ng-click="processUpload()"]';
   
    //Upload Feature Locators
    public static $TotalRowsUploaded='//table/tbody/tr/td[1][contains(.,"{{}}")]';
    public static $RowsAdded='//table/tbody/tr/td[2][contains(.,"{{}}")]';
    public static $RowsUpdated='//table/tbody/tr/td[3][contains(.,"{{}}")]';
    public static $TotalErrors='//table/tbody/tr/td[4][contains(.,"{{}}")]';
    
    public static $CloseErrorPopUpIcon='//img[@alt="Close"]|//div[@class="modal-body"]/a[@ng-click="cancel()"]';
    
    //showless panel locator
    public static $ShowLessLink="//div[@class='something-to-know']//span[@aria-hidden='false'][contains(.,'Show less')]";
   // locator for delete confirm button
 public static $ConfirmDialogBoxbutton='//button[@ng-click="confirm()"]';
 //locator for closing Error Pop up box
 
 public static $CloseIcononPopUp='//img[@alt="Close"]';

 //mailinator loctaor
    public static $subject='(//div[@class="innermail ng-binding"][contains(text(),"{{}}")])[1]';
    public static $innersubject='//td[contains(text(),"Subject")]/../td[contains(text(),"{{}}")]';
    public static $verifybody='(//table[@cellspacing]//td)[2]';
    
    //google locator
    public static $gmailid="//input[@id='Email']|//input[@type='email']";
    public static $gmailnext="//input[@id='next']|//span[contains(text(),'Next')]";
    public static $gmailpassword='//input[@id="Passwd"]|//input[@type="password"]';
    public static $gmailsignin='//input[@id="signIn"]';
    public static $create='//div[contains(text(),"Create")]';
    public static $todayappointment='//td[@class="tg-col-today"]//span[@class="chip-caption"]';
    public static $tomorrowappoint='//td[@class="tg-col-today tg-weekend"]//span[@class="chip-caption"]';
    public static $time='//div[@class="neb-date"]//div';
    public static $frameclose='//div[@class="bubbleclose"]';
    public static $clickontodayreason='(//td[@class="tg-col-today"]//dt/following-sibling::dd//span)[1]';
    public static $error='//button[contains(text(),"OK")]';
    public static $clickontomorrowreason='//td[@class="tg-col-today tg-weekend"]//dt/following-sibling::dd//span';
    public static $description='//label[contains(text(),"Description")]/../following-sibling::td//textarea';
    public static $status='//label[contains(text(),"Show me as")]/../following-sibling::td//input';
    public static $createevent='//input[@title="Event title"]';
    public static $fromdate='//input[@title="From date"]';
    public static $selectdateongoolge='(//td[contains(@class,"dp-onmonth")][text()="{{}}"])[2]';
    public static $fromtime='//input[@title="From time"]';
    public static $endtime='//input[@title="Until time"]';
    public static $location='//input[@placeholder="Enter a location"]';
    public static $savebtn='//div[contains(text(),"Save")]/../../../../../div[@role="button"]';
    public static $verifyappointment="//td[@class='tg-col-today']//dl[@class='cbrd']//span[contains(text(),'{{}}')]/..";
    public static $verifytomorrowappointment="//td[@class='tg-col-today tg-weekend']//dl[@class='cbrd']//span[contains(text(),'{{}}')]/..";
    public static $backtocalendar='//div[@title="Back to calendar"]';
    public static $clickonappointmenthavinglocation='//td[@class="tg-col-today"]//dl[@class="cbrd"]//div//span[contains(text(),"{{}}")]';
    public static $deleteappointment='//div[contains(text(),"Delete")]';
    public static $locationverifybookthroughmap='//td[@class="neb-break-words"]';
    public static $gmailappointmentdeletedmsg='//div[@class="uroot"][contains(text(),"{{}}")]';
    public static $checkboxfortypeofappoinment='//input[@type="checkbox"]/..//label[contains(text(),"{{}}")]';
    public static $verifyfulldayappointment="//div[@class='rb-ni']//span[contains(.,'{{}}')]";
    public static $selectoptionforshowme="//label[contains(text(),'Show me as')]/../following-sibling::td//label[contains(.,'{{}}')]";
    
}
