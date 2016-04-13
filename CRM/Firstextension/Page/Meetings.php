<?php

require_once 'CRM/Core/Page.php';

class CRM_Firstextension_Page_Meetings extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(ts('Meetings'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));
    //Assign a contact for use in a template
    $params = array('do_not_email' => 0, );

    $result = civicrm_api3('contact', 'get', $params);

    $this->assign('contactGotten', $result['count']);

    $this->assign('contacts', $result);

    parent::run();
  }
}
