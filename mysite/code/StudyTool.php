<?php
/**
 * An abstraction for Student Help Tools. All Study Tools have an image button that
 * can be used by a Study tool holder in order to link to it.
 */
class StudyTool extends Page
{
	public static $db = array("ToolExternalDescription" => 'HTMLText');
	static $has_one = array('Image' => 'Image');
	
	static $default_parent = 'StudentToolsHolder';
	static $can_be_root = false;

	function getCMSFields() 
	{
		
		// include the standard cms fields
		SiteTree::disableCMSFieldsExtensions();
		$fields = parent::getCMSFields();
		SiteTree::enableCMSFieldsExtensions();

		// add the cms new fields
		$fields->addFieldToTab("Root.Content.Main", new HtmlEditorField("ToolExternalDescription", "Short description of the study calculator tool for the self-help tools homepage"), "Content");
		$fields->addFieldToTab("Root.Content.Main", new FieldGroup(
			new ImageField("Image", "Choose an image to use as a button link")), "Content");
 
		$this->extend('updateCMSFields', $fields);

		return $fields;
	}
}

class StudyTool_Controller extends Page_Controller {
     
}
?>