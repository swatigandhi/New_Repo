Feature: Login

Scenario: Verify Coordinator can access the skyfactor application with valid credentials-@testcaseID=19753
Given user is on skyfactor login page
When user login into the application with "qanupur@mailinator.com" as username and "Qait@123" as password
Then User lands on Overview page


