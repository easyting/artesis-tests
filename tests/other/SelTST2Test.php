<?php
class SelTST2Test extends TestCase
{
  public function testMyTestCase()
  {
    $this->open("/da");
    $this->click("link=Aktuelt");
    $this->waitForPageToLoad("30000");
    $this->click("link=Odsherred vælger easy.T!NG");
    $this->waitForPageToLoad("30000");
    $this->click("link=Emneguide");
    $this->waitForPageToLoad("30000");
    $this->click("link=Bibliotekets apps til smartphones");
    $this->waitForPageToLoad("30000");
    $this->click("link=How to ...");
    $this->waitForPageToLoad("30000");
    $this->click("link=Sådan tjekker du dine reserveringer");
    $this->waitForPageToLoad("30000");
    $this->click("link=E-resurser");
    $this->waitForPageToLoad("30000");
    $this->click("link=Afdelinger");
    $this->waitForPageToLoad("30000");
    $this->click("link=Om os");
    $this->waitForPageToLoad("30000");
    $this->click("link=Studiestart");
    $this->waitForPageToLoad("30000");
    $this->click("css=h2.block-title");
    $this->type("id=cpr_edit-name", "5000156630");
    $this->type("id=edit-pass", "4455");
    $this->click("id=edit-submit--2");
    $this->waitForPageToLoad("30000");
    $this->click("link=Aktuelt");
    $this->waitForPageToLoad("30000");
    $this->click("link=Odsherred vælger easy.T!NG");
    $this->waitForPageToLoad("30000");
    $this->click("link=Emneguide");
    $this->waitForPageToLoad("30000");
    $this->click("link=Bibliotekets apps til smartphones");
    $this->waitForPageToLoad("30000");
    $this->click("link=How to ...");
    $this->waitForPageToLoad("30000");
    $this->click("link=Sådan tjekker du dine reserveringer");
    $this->waitForPageToLoad("30000");
    $this->click("link=E-resurser");
    $this->waitForPageToLoad("30000");
    $this->click("link=Afdelinger");
    $this->waitForPageToLoad("30000");
    $this->click("link=Om os");
    $this->waitForPageToLoad("30000");
    $this->click("link=Studiestart");
    $this->waitForPageToLoad("30000");
  }
}
?>