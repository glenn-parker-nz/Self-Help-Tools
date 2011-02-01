<div class="typography">
<% require themedCSS(StudentStudyCalculator) %>
		<div id="Content">

	<% if Level(2) %>
	  	<% include BreadCrumbs %>
	<% end_if %>
	
		<h2>$Title</h2>
	
		$Content

		$Form
		$calcForm
	
</div>