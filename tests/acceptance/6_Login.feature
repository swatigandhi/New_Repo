Feature: Login

Scenario: Ensure that error message is displayed while login using invalid credentials-@testcaseID=19752
    Given user is on skyfactor login page
    When user login into the application with "invalid@mailinator.com" as username and "Qait@123" as password
    Then User should be able to see the error message on the page

Scenario: Verify Coordinator can access the skyfactor application with valid credentials-@testcaseID=19753
Given user is on skyfactor login page
When user login into the application with "qanupur@mailinator.com" as username and "Qait@123" as password
Then User lands on Overview page

Scenario: Ensure that the password can be updated through My Account-@testcaseID=19754
    Given user is on "overview" page
    When user clicks on account dropdown
    And user clicks on "My Account" link
    And user clicks on Change password link
    And user fills "Qait@123" as new password
    And user fills "Qait@123" as confirm password
    And user clicks on save button to update the account
    Then user is able to see "Your account has been updated" message in the alert

Scenario: Verify Coordinator can access the application with new Password-@testcaseID=19755
Given user is on skyfactor login page
When user login into the application with "qanupur@mailinator.com" as username and "Qait@123" as password
Then User lands on Overview page

Scenario: Ensure that the phone can be updated through My Account-@testcaseID=19756
    Given user is on "overview" page
    When user clicks on account dropdown
    And user clicks on "My Account" link
    And user fills "1234567890" as mobile number
    And user clicks on save button to update the account
    Then user is able to see "Your account has been updated" message in the alert
    And user is able to see updated mobile number in the textbox


