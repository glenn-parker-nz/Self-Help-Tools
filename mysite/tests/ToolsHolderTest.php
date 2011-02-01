<?php
class ToolsHolderTest extends SapphireTest 
{	
	protected $fixture_file = 'sapphire/tests/ToolsHolderTest.yml';
	
	function testContainedHelpTools()
	{
		$template_array=array(	'Student-AssessmentReminder');
		
		$msg="An important message template is missing: ";
		foreach($template_array as $template_name)
		{
			$message_template=Message_template::get($template_name);
			
			$this->assertNotNull($message_template, $msg.$template_name);
		}	
	}
}
?>
