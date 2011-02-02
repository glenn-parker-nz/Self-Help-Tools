<div class="typography">
<% require themedCSS(StudentCareerPlanner) %>
		<div id="Content">
	<% if Level(2) %>
	  	<% include BreadCrumbs %>
	<% end_if %>
	
	<h2>$Title</h2>
	$Content
	$Form 
	
 <div class="wrapa">$CareerForm</div>
 <div class="car"><label>as a Career</label></div>
</div>	
</div>

