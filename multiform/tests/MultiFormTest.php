<?php
/**
 * MultiFormTest
 * For testing purposes, we have some test classes:
 * 
 *  - MultiFormTest_Controller (simulation of a real Controller class)
 *  - MultiFormTest_Form (subclass of MultiForm)
 *  - MultiFormTest_StepOne (subclass of MultiFormStep)
 *  - MultiFormTest_StepTwo (subclass of MultiFormStep)
 *  - MultiFormTest_StepThree (subclass of MultiFormStep)
 *
 * The above classes are used to simulate real-world behaviour
 * of the multiform module - for example, MultiFormTest_Controller
 * is a simulation of a page where MultiFormTest_Form is a simple
 * multi-step contact form it belongs to.
 * 
 * @package multiform
 * @subpackage tests
 */
class MultiFormTest extends FunctionalTest {
	
	public static $fixture_file = 'multiform/tests/MultiFormTest.yml';
	
	protected $controller;
	
	function setUp() {
		parent::setUp();
		
		$this->controller = new MultiFormTest_Controller();
		$this->form = $this->controller->Form();
	}
	
	function testInitialisingForm() {
		$this->assertTrue(is_numeric($this->form->getCurrentStep()->ID) && ($this->form->getCurrentStep()->ID > 0));
		$this->assertTrue(is_numeric($this->form->getSession()->ID) && ($this->form->getSession()->ID > 0));
		$this->assertEquals('MultiFormTest_StepOne', $this->form->getStartStep());
	}
	
	function testSessionGeneration() {
		$this->assertTrue($this->form->session->ID > 0);
	}
	
	function testMemberLogging() {
		// Grab any user to fake being logged in as, and ensure that after a session is written it has
		// that user as the submitter.
		$userId = Member::get_one("Member")->ID;
		$this->session()->inst_set('loggedInAs', $userId);
		
		$session = $this->form->session;
		$session->write();
		
		$this->assertEquals($userId, $session->SubmitterID);
	}
	
	function testSecondStep() {
		$this->assertEquals('MultiFormTest_StepTwo', $this->form->getCurrentStep()->getNextStep());
	}
	
	function testParentForm() {
		$currentStep = $this->form->getCurrentStep();
		$this->assertEquals($currentStep->getForm()->class, $this->form->class);
	}
	
	function testTotalStepCount() {
		$this->assertEquals(3, $this->form->getAllStepsLinear()->Count());
	}
	
	function testStepTraversal() {
		$this->get($this->controller->class);
		
		$actionNextResponse = $this->submitForm('MultiFormTest_Form', 'action_next', array(
			'FirstName' => 'Joe',
			'Surname' => 'Bloggs',
			'Email' => 'joe@bloggs.com'
		));
		
		$this->assertEquals(200, $actionNextResponse->getStatusCode());
		$this->assertNotNull($actionNextResponse->getBody());
		
		$actionPrevResponse = $this->submitForm('MultiFormTest_Form', 'action_prev');
		
		$this->assertEquals(200, $actionPrevResponse->getStatusCode());
		$this->assertNotNull($actionPrevResponse->getBody());
	}
	
	function testCompletedSession() {
		$this->form->setCurrentSessionHash($this->form->session->Hash);
		$this->assertType('MultiFormSession', $this->form->getCurrentSession());
		$this->form->session->markCompleted();
		$this->assertFalse($this->form->getCurrentSession());
	}
	
	function testIncorrectSessionIdentifier() {
		$this->form->setCurrentSessionHash('sdfsdf3432325325sfsdfdf'); // made up!
		$this->assertFalse($this->form->getCurrentSession());
		
		// A new session is generated, even though we made up the identifier
		$this->assertType('MultiFormSession', $this->form->session);
	}
	
}
class MultiFormTest_Controller extends Controller implements TestOnly {

	function Link() {
		return 'MultiFormTest_Controller';
	}
	
	public function Form($request = null) {
		$form = new MultiFormTest_Form($this, 'Form');
		$form->setHTMLID('MultiFormTest_Form');
		return $form;
	}

}
class MultiFormTest_Form extends MultiForm implements TestOnly {

	public static $start_step = 'MultiFormTest_StepOne';
	
	function getStartStep() {
		return $this->stat('start_step');
	}

}
class MultiFormTest_StepOne extends MultiFormStep implements TestOnly {
	
	public static $next_steps = 'MultiFormTest_StepTwo';
	
	function getFields() {
		return new FieldSet(
			new TextField('FirstName', 'First name'),
			new TextField('Surname', 'Surname'),
			new EmailField('Email', 'Email address')
		);
	}
	
}
class MultiFormTest_StepTwo extends MultiFormStep implements TestOnly {
	
	public static $next_steps = 'MultiFormTest_StepThree';
	
	function getFields() {
		return new FieldSet(
			new TextareaField('Comments', 'Tell us a bit about yourself...')
		);
	}
	
}
class MultiFormTest_StepThree extends MultiFormStep implements TestOnly {
	
	public static $is_final_step = true;
	
	function getFields() {
		return new FieldSet(
			new TextField('Test', 'Anything else you\'d like to tell us?')
		);
	}
	
}
