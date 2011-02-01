<?php

class StudentStudyCalculator extends StudyTool {
}

class StudentStudyCalculator_Controller extends StudyTool_Controller {
	
	static $allowed_actions = array('calcForm');
	 
	private function getSubjects() {
		$sql="SELECT DISTINCT \"Subject\" FROM \"Courses\"";
		$result=pg_query($sql);

		$options = array();

		while ($row=pg_fetch_array($result)) {

			$subject=$row["Subject"];
			//$options.="<OPTION VALUE=\"$subject\">";
			$options[] = $subject;
		}
		return $options;
	}
	
	private function getQualType() {
    $sql="SELECT DISTINCT \"QualType\" FROM \"Courses\"";
    $result=pg_query($sql);

    $options = array();

    while ($row=pg_fetch_array($result)) {

      $qualtype=$row["QualType"];
      //$options.="<OPTION VALUE=\"$subject\">";
      $options[] = $qualtype;
    }
    return $options;
  }
  
  private function getQual() {
    $sql="SELECT DISTINCT \"Qual\" FROM \"Courses\"";
    $result=pg_query($sql);

    $options = array();

    while ($row=pg_fetch_array($result)) {

      $qual=$row["Qual"];
      //$options.="<OPTION VALUE=\"$subject\">";
      $options[] = $qual;
    }
    return $options;
  }
  
  private function getCourseName() {
    $sql="SELECT DISTINCT \"CourseName\" FROM \"Courses\"";
    $result=pg_query($sql);

    $options = array();

    while ($row=pg_fetch_array($result)) {

      $coursename=$row["CourseName"];
      //$options.="<OPTION VALUE=\"$subject\">";
      $options[] = $coursename;
    }
    return $options;
  }
	
	function calcForm() {
		$fields = new fieldset(
			new DropdownField('Subject', 'subject', $this->getSubjects(), 'subject'),
			new DropdownField('QualType', 'qualtype', $this->getQualType(), 'qualtype'),
			new DropdownField('Qual', 'qual', $this->getQual(), 'qual'),
			new DropdownField('CourseName', 'coursename', $this->getCourseName(), 'coursename')
		);
		
		// Create action
      $actions = new FieldSet(
        new FormAction('SendcalcFormForm', '+')
      );
      
		$validator = new requiredfields('subject');
		
		return new Form($this, 'calcForm', $fields, $actions, $validator);
	}
}
?>