<?php
class SelTST1Test extends TestCase
{

  public function testMyTestCase()
  {
    $this->open("/da/");
    $this->click("link=Kalender");
    $this->waitForPageToLoad("30000");
    $this->click("link=Inspiration");
    $this->waitForPageToLoad("30000");
    $this->click("link=Biblioteker");
    $this->waitForPageToLoad("30000");
    $this->click("link=Vi tilbyder");
    $this->waitForPageToLoad("30000");
    $this->click("css=div.pane-content > ul.menu > li.first.leaf > a");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Biblioteksorientering')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Book en bibliotekar')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Bøger til læsekredse?')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("css=div.pane-content > ul.menu > li.collapsed > a");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'E-opslagsværker')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'In english')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Lydavis')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Lær om it')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Studerende')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("css=div.pane-content > ul.menu > li.last.leaf > a");
    $this->waitForPageToLoad("30000");
    $this->click("link=Sådan gør du");
    $this->waitForPageToLoad("30000");
  }
}
