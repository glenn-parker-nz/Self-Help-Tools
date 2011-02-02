<?php
class StudentCareerPlanner extends StudyTool
{
  //Define our form function as allowed
  static $allowed_actions = array('CareerForm');
}

class StudentCareerPlanner_Controller extends StudyTool_Controller 
{
      private function getName() {
    $sql="SELECT DISTINCT \"Name\" FROM \"Subject\"";
    $result=pg_query($sql);

    $options = array();

    while ($row=pg_fetch_array($result)) {

      $name=$row["Name"];
      //$options.="<OPTION VALUE=\"$subject\">";
      $options[] = $name;
    }
    return $options;
  }
    
  
  //The function which generates our form
  function CareerForm() 
  {
        // Create fields
      $fields = new FieldSet(
      new DropdownField('Name', 'I\'m interested in', $this->getName(), 'name')
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