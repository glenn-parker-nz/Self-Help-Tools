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
	
	function calcForm() {
		$fields = new fieldset(
			new DropdownField('Subject', 'subject', $this->getSubjects(), 'subject'),
			new DropdownField('qualtype', 'qualtype', $this->getSubjects(), 'qualtype'),
			new DropdownField('qual', 'qual', $this->getSubjects(), 'qual')
		);
		$actions = new fieldset();
		$validator = new requiredfields('subject');
		
		return new Form($this, 'calcForm', $fields, $actions, $validator);
	}
}
?>