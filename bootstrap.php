<?php
// Make sure all code is taken only from local dir (exclude PEAR install of PHPUnit)
ini_set('inclide_path', __DIR__);
require 'vendor/autoload.php';

class TestCase extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*firefox");

    // Get URL from env
    $url = getenv('SELENIUM_BROWSER_URL');

    // Set URL from phpunit.xml
    if (empty($url)) {
      $url = $GLOBALS['url'];
    }

    $this->setBrowserUrl($url);
  }
}
