<?php

require_once( 'E:\Program Files\XAMPP\php\simpletest\autorun.php' );

require_once( '..\mdetect.php' );

// v0.10

class TestFF_v0_10 extends UnitTestCase {

"  function test_A(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20040914 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_B(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20040913 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_C(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20040913 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_D(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.0; zh-TW; rv:1.8.0.1) Gecko/20060111 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_E(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.0; rv:1.7.3) Gecko/20040913 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_F(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Win98; rv:1.7.3) Gecko/20040913 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_G(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; rv:1.7.3) Gecko/20040913 Firefox/0.10';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
}

// Debian

class TestFF_debian extends UnitTestCase {

"  function test_A(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081202 Firefox (Debian-2.0.0.19-0etch1)';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
}

// Pre-Beta

class TestFF_prebeta extends UnitTestCase {

"  function test_A(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (X11; U; Gentoo Linux x86_64; pl-PL) Gecko Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_B(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (X11; ; Linux x86_64; rv:1.8.1.6) Gecko/20070802 Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_C(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.0.6) Gecko/2009011913 Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_D(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.9.2.20) Gecko/20110803 Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_E(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; rv:1.8.1.16) Gecko/20080702 Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
"  function test_F(){
    $MDetect = new uagent_info();
    $MDetect->useragent = 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.13) Gecko/20080313 Firefox';
    $MDetect->InitDeviceScan();

    $this->assertFalse( $MDetect->isIphone );
    $this->assertFalse( $MDetect->isAndroidPhone );
    $this->assertFalse( $MDetect->isTierTablet );
    $this->assertFalse( $MDetect->isTierIphone );
    $this->assertFalse( $MDetect->isTierRichCss );
    $this->assertFalse( $MDetect->isTierGenericMobile );
    
    $this->assertFalse( $MDetect->DetectWebkit() );
    
    $this->assertFalse( $MDetect->DetectIos() );
    
    $this->assertFalse( $MDetect->DetectIphone() );
    $this->assertFalse( $MDetect->DetectIpod() );
    $this->assertFalse( $MDetect->DetectIpad() );
    $this->assertFalse( $MDetect->DetectIphoneOrIpod() );
    
    $this->assertFalse( $MDetect->DetectAndroid() );
    $this->assertFalse( $MDetect->DetectAndroidPhone() );
    $this->assertFalse( $MDetect->DetectAndroidTablet() );
    $this->assertFalse( $MDetect->DetectAndroidWebKit() );
    
    $this->assertFalse( $MDetect->DetectGoogleTV() );
    
    $this->assertFalse( $MDetect->DetectS60OssBrowser() );
    
    $this->assertFalse( $MDetect->DetectSymbianOS() );
    
    $this->assertFalse( $MDetect->DetectWindowsMobile() );
    $this->assertFalse( $MDetect->DetectWindowsPhone7() );
    
    $this->assertFalse( $MDetect->DetectBlackBerry() );
    $this->assertFalse( $MDetect->DetectBlackBerryTablet() );
    $this->assertFalse( $MDetect->DetectBlackBerryWebKit() );
    $this->assertFalse( $MDetect->DetectBlackBerryTouch() );
    $this->assertFalse( $MDetect->DetectBlackBerryLow() );
    $this->assertFalse( $MDetect->DetectBlackBerryHigh() );
    
    $this->assertFalse( $MDetect->DetectPalmOS() );
    $this->assertFalse( $MDetect->DetectPalmWebOS() );
    
    $this->assertFalse( $MDetect->DetectWebOSTablet() );
    $this->assertFalse( $MDetect->DetectGarminNuvifone() );
    
    $this->assertFalse( $MDetect->DetectBrewDevice() );
    $this->assertFalse( $MDetect->DetectDangerHiptop() );
    $this->assertFalse( $MDetect->DetectOperaMobile() );
    
    $this->assertFalse( $MDetect->DetectOperaAndroidPhone() );
    $this->assertFalse( $MDetect->DetectOperaAndroidTablet() );
    $this->assertFalse( $MDetect->DetectKindle() );
    $this->assertFalse( $MDetect->DetectAmazonSilk() );
    
    $this->assertFalse( $MDetect->DetectMidpCapable() );
    $this->assertFalse( $MDetect->DetectWapWml() );
    
    $this->assertFalse( $MDetect->DetectSonyPlaystation() );
    $this->assertFalse( $MDetect->DetectNintendo() );
    $this->assertFalse( $MDetect->DetectXbox() );
    $this->assertFalse( $MDetect->DetectGameConsole() );
    $this->assertFalse( $MDetect->DetectMaemoTablet() );
    $this->assertFalse( $MDetect->DetectArchos() );
    $this->assertFalse( $MDetect->DetectSonyMylo() );
    
    $this->assertFalse( $MDetect->DetectSmartphone() );
    
    $this->assertFalse( $MDetect->DetectMobileQuick() );
    $this->assertFalse( $MDetect->DetectMobileLong() );
    
    $this->assertFalse( $MDetect->DetectTierTablet() );
    $this->assertFalse( $MDetect->DetectTierIphone() );
    $this->assertFalse( $MDetect->DetectTierRichCss() );
    $this->assertFalse( $MDetect->DetectTierOtherPhones() );
  }
"
}
