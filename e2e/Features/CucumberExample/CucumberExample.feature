
Feature: CucumberExample
  
  In order to use Cucumber with Gherkin
  As a developer
  I want to verify that the harness is working
  So that I can start doing BDD

  Scenario: Check App fires up
    Given I am on the app page
    And I wait "2" seconds
    Then I should see "LISTINGSLAB FREE"
