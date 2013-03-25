<?php
require_once( 'E:\Program Files\XAMPP\php\simpletest\autorun.php' );
require_once( '..\mdetect.php' );

class TestMDetect extends UnitTestCase {

  function testViewGuestbookWithEntries(){
      $MDetect = new uagent_info();

      // Internet Explorer 6
      $MDetect->useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)';
      
      $MDetect->InitDeviceScan();
      
      $this->assertFalse( $MDetect->isIphone );
  }

}
