<div class="typography">
	<% require themedCSS(StudentToolsHolder) %>
	
	<div id="selfhelpblock">
		<div id="intro">
			<h1>Open Polytechnic Self Help Tools</h1>
			<div id="holdercontent">
				$Content
			</div>
		</div>

		<% control ContainedHelpTools %>				
			<div class="feature">
				<h2>$Title</h2>
				<div class="content">$ToolExternalDescription</div>	
				
				<div class="button">
					 <a href="$Link"><img class="left" src="$Image.URL" 
					  alt="Button Image" /></a>
				</div>
			</div>
		<% end_control %>	
	</div>
</div>