<div class="typography">
<% require themedCSS(StudentCareerPlanner) %>
	<% if Menu(2) %>
		<% include SideBar %>
		<div id="Content">
	<% end_if %>

	<% if Level(2) %>
	  	<% include BreadCrumbs %>
	<% end_if %>
	
	<h2>$Title</h2>
	$Content
	$Form 
	
 <div class="wrapa">$CareerForm</div>
	
	<% if Menu(2) %>
		</div>
	<% end_if %>
	
</div>

