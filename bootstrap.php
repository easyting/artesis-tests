<?php
// Make sure all code is taken only from local dir (exclude PEAR install of PHPUnit)
ini_set('inclide_path', __DIR__);
require 'vendor/autoload.php';

class TestCase extends PHPUnit_Extensions_Selenium2TestCase
{

  protected function setUp()
  {
    $this->setBrowser('firefox');
    //$this->setBrowser('chrome');

    // Get URL from env, will not be overwritten by phpunit.xml
    $url = getenv('SELENIUM_BROWSER_URL');

    // Set URL from phpunit.xml
    if (empty($url)) {
      $url = $GLOBALS['url'];
    }

    $this->setBrowserUrl($url);
  }

  /**
   * (non-PHPdoc)
   * @see PHPUnit_Extensions_Selenium2TestCase::prepareSession()
   */
  public function prepareSession()
  {
    try {
      $this->session = parent::prepareSession();
    } catch (PHPUnit_Framework_SkippedTestError $ex){
      // Fail the test if it was skipped (most likely a system error).
      $this->fail($ex->getMessage());
    }
    return $this->session;
  }

  /**
   * (non-PHPdoc)
   * @see PHPUnit_Extensions_Selenium2TestCase::setBrowserUrl()
   */
  public function setBrowserUrl($browserUrl)
  {
    // Make sure $browserUrl does not end with /
    $browserUrl = rtrim($browserUrl, '/');
    parent::setBrowserUrl($browserUrl);
  }

  /**
   * Open relative URL
   */
  public function open($url)
  {
    $url = $this->getBrowserUrl() . $url;
    return $this->url($url);
  }
}
