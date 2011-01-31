<?php
/**
 * A container to house the collection of student learning tools
 */
class StudentToolsHolder extends Page
{     
	public static $db = array();
	static $allowed_children = array('StudyTool'); 
}

class StudentToolsHolder_Controller extends Page_Controller 
{
	/**
	 * Retrieves all the contained Student help tools
	 * @return the current set of tools
	 */
	function ContainedHelpTools()
	{
		// check there is an existing student help tools holder
   		$toolsHolder = DataObject::get_one("StudentToolsHolder");
     
     	// given there is a student help tools holder, get all the contained Student Help Tools
     	if ($toolsHolder)
     	{
     		$tools = $toolsHolder->Children();
     		return $tools;
     	}
     	return false;
	}
}
?>