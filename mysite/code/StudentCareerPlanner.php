<?php

class StudentCareerPlanner extends Page{
        
      
  public static $db = array("ExternalToolDescription" => 'Varchar');

  public static $has_one = array('Image' => 'Image','LinkedPage' => 'SiteTree');
  
  function getCMSFields()
  {
    $fields = parent::getCMSFields();
    
    // add the first promotion item
    $fields->addFieldToTab("Root.Content.Main",  new TextareaField("ExternalToolDescription", 'Description'));
    $fields->addFieldToTab("Root.Content.Main", new FieldGroup( new ImageField("Image", 'Button Image'), 
      new TreeDropdownField('LinkedPage', 'Page to link to', 'SiteTree')
      ));
    
    return $fields;
  } 
  
}

static $default_parent = 'StudentToolsHolder';

class StudentCareerPlanner_Controller extends Page_Controller {
     
}

?>