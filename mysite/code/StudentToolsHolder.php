<?php

class StudentToolsHolder extends Page{
        
      
  public static $db = array(
  );

  static $allowed_children = array('StudentStudyCalculator','StudentCareerPlanner');
  
}

class StudentToolsHolder_Controller extends Page_Controller {
     
}
  
?>