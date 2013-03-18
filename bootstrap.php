<?php
ini_set('inclide_path', ',');

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
