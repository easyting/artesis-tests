<?php
class LoginTest extends TestCase
{
  public function testLoginBlock()
  {
    // Open home page
    $this->open('/');

    // Submit login form
    $this->byCssSelector('section#block-user-login h2.block-title')->click();
    $this->byId('edit-name')->value('admin');
    $this->byId('edit-pass')->value('1234');
    $this->byId('user-login-form')->submit();

    // Check if logged in as "admin"
    $this->assertContains('Velkommen<span>admin</span>', $this->source());
  }
}
