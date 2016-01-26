<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Generated;

use WebDevJL\WebIde\Generated\EasyMvcDalModules;

class EasyMvcDalModulesTest extends \PHPUnit_Framework_TestCase {

  protected $app;

  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
      $this->app = new \WebDevJL\WebIde\Tests\TestApplication();
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $this->assertNotNull($this->app);
    $result = new EasyMvcDalModules($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Generated\EasyMvcDalModules', $result);
  }
  
  //Write the next tests below...
  
}