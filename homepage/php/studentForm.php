<div class="container">
  <div class="bg-lg-2">
    <div class="bg-col">
		<form id="studentForm_01" class="appnitro"  method="post" action="php/studentQuery01.php">
		<div class="form_description">
				<h2>List Sections of the Course.</h2>
				<p>Including the classroom, the meeting days and time, and number of students enrolled 
					in each section.</p>
			</div>						
				<li id="li_1" >
					<label class="description" for="courseNumber">course number </label>
			<div>
				<input id="courseNumber" name="courseNumber" class="element text small" type="text" maxlength="255" value=""/> 
			</div> 
				<li class="buttons">
					<input type="hidden" name="professorForm" value="01" />    
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</form>	
		<br>

		<form id="studentForm_02" class="appnitro"  method="post" action="php/studentQuery02.php">
		<div class="form_description">
				<h2>List all Courses and Grades</h2>
			</div>						
				<li id="li_2" >
					<label class="description" for="studentId">student Id</label>
			<div>
			<input id="studentId" name="studentId" class="element text small" type="text" maxlength="255" value=""/> 
			</div>						 
				<li class="buttons">
					<input type="hidden" name="studentForm" value="02" />    
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</form>	
	</div>
  </div>
</div>