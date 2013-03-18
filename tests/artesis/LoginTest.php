<?php
class LoginTest extends TestCase
{
  protected function setUp()
  {
    parent::setUp();
  }

  public function testLoginBlock()
  {
    // Open home page
    $this->open('/');

    // Submit login form
    $this->click('css=section#block-user-login h2.block-title');
    $this->type('edit-name', 'admin');
    $this->type('edit-pass', '1234');
    $this->submit('user-login-form');
    $this->waitForPageToLoad();

    // Check if logged in as "admin"
    $this->assertContains('Velkommen<span>admin</span>', $this->getHtmlSource());
  }
}
