<?php

class StudentCareerPlanner extends StudyTool{

  static $db = array("chooseCareers" => "Enum('Plumber, Designer, Blogger,Teacher')"); 
}

class StudentCareerPlanner_Controller extends StudyTool_Controller {
    
  
   //Define our form function as allowed
  static $allowed_actions = array(
    'CareerForm'
  );
  
  //The function which generates our form
  function CareerForm() 
  {
        // Create fields
      $fields = new FieldSet(
      new DropdownField('Careers','I\'m interested in becoming a', $this->dbObject('chooseCareers')->enumValues())
    );
    
    
      // Create action
      $actions = new FieldSet(
        new FormAction('SendCareerFormForm', 'Show me!')
      );
    
    // Create action
    $validator = new RequiredFields('Careers');
      
      return new Form($this, 'CareerForm', $fields, $actions, $validator);
  }     
}

?>