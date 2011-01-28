<?php

class StudentStudyCalculator extends Page{


	public static $db = array(
	"ToolExternalDescription" => 'Varchar'
	);

	static $has_one = array(
	'Image' => 'Image', 
	'LinkedPage' => 'SiteTree' 
	);

	static $default_parent = 'StudentToolsHolder';
	static $can_be_root = false;

	function getCMSFields() {

		SiteTree::disableCMSFieldsExtensions();
		$fields = parent::getCMSFields();
		SiteTree::enableCMSFieldsExtensions();

		$fields->addFieldToTab("Root.Content.Main", new FieldGroup(
		new TreeDropdownField("LinkPage", "Page that the image that will be used to link to this page", "SiteTree"),
		new ImageField("Image", "Choose an image to use as a button link")));

		$fields->addFieldToTab("Root.Content.Main", new TextField("ToolExternalDescription", "Short description of the study calculator tool for the self-help tools homepage"),"Content");

		 
		$this->extend('updateCMSFields', $fields);

		return $fields;
	}
}

class StudentStudyCalculator_Controller extends Page_Controller {
     
}


?>