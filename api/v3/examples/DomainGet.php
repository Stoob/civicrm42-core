<?php



/*
 
 */
function domain_get_example(){
$params = array( 
  'version' => 3,
);

  require_once 'api/api.php';
  $result = civicrm_api( 'domain','get',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function domain_get_expectedresult(){

  $expectedResult = array( 
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'id' => 1,
  'values' => array( 
      '1' => array( 
          'id' => '1',
          'name' => 'Default Domain Name',
          'config_backend' => 'a:77:{s:10:"userSystem";O:23:"CRM_Utils_System_Drupal":4:{s:9:"is_drupal";b:1;s:9:"is_joomla";b:0;s:12:"is_wordpress";b:0;s:24:"supports_form_extensions";b:1;}s:11:"initialized";i:0;s:15:"DAOFactoryClass";s:23:"CRM_Contact_DAO_Factory";s:17:"componentRegistry";O:18:"CRM_Core_Component":0:{}s:9:"inCiviCRM";b:0;s:18:"recaptchaPublicKey";N;s:5:"debug";i:0;s:9:"backtrace";i:0;s:12:"resourceBase";N;s:12:"countryLimit";a:1:{i:0;s:4:"1228";}s:13:"provinceLimit";a:1:{i:0;s:4:"1228";}s:21:"defaultContactCountry";s:4:"1228";s:15:"defaultCurrency";s:3:"USD";s:10:"lcMessages";s:5:"en_US";s:18:"dateformatDatetime";s:20:"%B %E%f, %Y %l:%M %P";s:14:"dateformatFull";s:11:"%B %E%f, %Y";s:17:"dateformatPartial";s:5:"%B %Y";s:14:"dateformatYear";s:2:"%Y";s:14:"dateformatTime";s:8:"%l:%M %P";s:15:"timeInputFormat";i:1;s:15:"dateInputFormat";s:8:"mm/dd/yy";s:15:"fiscalYearStart";a:2:{s:1:"M";i:1;s:1:"d";i:1;}s:11:"moneyformat";s:5:"%c %a";s:16:"moneyvalueformat";s:3:"%!i";s:15:"currencySymbols";s:0:"";s:21:"defaultCurrencySymbol";s:1:"$";s:20:"monetaryDecimalPoint";s:1:".";s:25:"monetaryThousandSeparator";s:1:",";s:14:"gettextCodeset";s:5:"utf-8";s:13:"gettextDomain";s:7:"civicrm";s:27:"userFrameworkUsersTableName";s:5:"users";s:21:"userFrameworkFrontend";b:0;s:20:"userFrameworkLogging";b:0;s:17:"maxImportFileSize";i:1048576;s:14:"maxAttachments";i:3;s:11:"maxFileSize";i:2;s:11:"mapProvider";N;s:9:"mapAPIKey";N;s:11:"geoProvider";N;s:9:"geoAPIKey";N;s:13:"geocodeMethod";s:0:"";s:12:"mapGeoCoding";i:1;s:15:"contactUndelete";b:1;s:7:"logging";b:0;s:12:"versionCheck";b:1;s:16:"enableComponents";a:6:{i:0;s:14:"CiviContribute";i:1;s:10:"CiviPledge";i:2;s:10:"CiviMember";i:3;s:9:"CiviEvent";i:4;s:8:"CiviMail";i:5;s:10:"CiviReport";}s:18:"enableComponentIDs";a:6:{i:0;i:1;i:1;i:6;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:8;}s:11:"civiModules";a:0:{}s:9:"enableSSL";b:0;s:18:"fatalErrorTemplate";s:20:"CRM/common/fatal.tpl";s:17:"fatalErrorHandler";N;s:14:"legacyEncoding";s:12:"Windows-1252";s:14:"fieldSeparator";s:1:",";s:17:"maxLocationBlocks";i:2;s:15:"captchaFontPath";s:25:"/usr/X11R6/lib/X11/fonts/";s:11:"captchaFont";s:17:"HelveticaBold.ttf";s:21:"includeWildCardInName";i:1;s:18:"includeEmailInName";i:1;s:21:"includeNickNameInName";i:0;s:22:"smartGroupCacheTimeout";i:0;s:22:"defaultSearchProfileID";N;s:21:"dashboardCacheTimeout";i:1440;s:15:"doNotResetCache";i:0;s:24:"includeAlphabeticalPager";i:1;s:20:"includeOrderByClause";i:1;s:13:"oldInputStyle";i:1;s:14:"formKeyDisable";b:0;s:21:"doNotAttachPDFReceipt";b:0;s:15:"wkhtmltopdfPath";b:0;s:13:"verpSeparator";s:1:".";s:12:"mailerPeriod";i:180;s:16:"mailerSpoolLimit";i:0;s:16:"mailerBatchLimit";i:0;s:13:"mailerJobSize";i:0;s:13:"mailerJobsMax";i:0;s:16:"mailThrottleTime";i:0;s:15:"civiRelativeURL";s:13:"/index.php?q=";}',
          'version' => '3',
          'loc_block_id' => '2',
          'domain_email' => 'my@email.com',
          'domain_phone' => array( 
              'phone_type' => 'Phone',
              'phone' => '456-456',
            ),
          'domain_address' => array( 
              'street_address' => '45 Penny Lane',
              'supplemental_address_1' => '',
              'supplemental_address_2' => '',
              'city' => '',
              'state_province_id' => '',
              'postal_code' => '',
              'country_id' => '',
              'geo_code_1' => '',
              'geo_code_2' => '',
            ),
          'from_email' => 'info@FIXME.ORG',
          'from_name' => 'FIXME',
        ),
    ),
);

  return $expectedResult  ;
}




/*
* This example has been generated from the API test suite. The test that created it is called
* 
* testGet and can be found in 
* http://svn.civicrm.org/civicrm/branches/v3.4/tests/phpunit/CiviTest/api/v3/DomainTest.php
* 
* You can see the outcome of the API tests at 
* http://tests.dev.civicrm.org/trunk/results-api_v3
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*/