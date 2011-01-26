<?php

class StudentStudyCalculator extends Page{
        
      
  public static $db = array(
  "buttonImage" => "Datetime",
  "Author" => 'Varchar',
  "Tags" => "Text",
  "Author_id" => 'Int',
  "FeatureCandidate" => 'Boolean'   // mapped to checkbox in the CMS
  );

  public static $has_one = array(
  );
  
}

static $default_parent = 'StudentToolsHolder';
?>