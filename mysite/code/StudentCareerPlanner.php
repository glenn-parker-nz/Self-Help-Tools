<?php

class StudentCareerPlanner extends StudyTool
{
	public static $db = array("InterestPhrase" => 'Text');
	static $has_one = array('ShowMeImage' => 'Image');

	function getCMSFields() 
	{
		// include the standard cms fields
		SiteTree::disableCMSFieldsExtensions();
		$fields = parent::getCMSFields();
		SiteTree::enableCMSFieldsExtensions();

		// add the cms new fields
		$fields->addFieldToTab("Root.Content.Main", new TextField("InterestPhrase", "Short phrase 
			that leads to the drop down box for selecting a career"),"Content");
 
		//$this->extend('updateCMSFields', $fields);

		return $fields;
	} 
}

class StudentCareerPlanner_Controller extends StudyTool_Controller {
     
}

?>