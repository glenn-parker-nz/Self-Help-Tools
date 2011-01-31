<?php

class StudentStudyCalculator extends StudyTool{

}

class StudentStudyCalculator_Controller extends StudyTool_Controller {
     
function getSubjects() {
		$sql="SELECT DISTINCT Subject FROM Courses";
		$result=pg_query($sql);

		$options="";

		while ($row=mysql_fetch_array($result)) {

			$subject=$row["Subject"];
			$options.="<OPTION VALUE=\"$subject\">";
		}
	}
}
?>