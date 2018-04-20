<div class="container">
  <div class="bg-lg-2">
    <div class="bg-col">
		<form id="professorForm_01" class="appnitro"  method="post" action="php/professorQuery01.php">
		<div class="form_description">
				<h2>List Titles, classrooms, meeting days, and Time of Class</h2>
				<p>put in the ssn of a professor.</p>
			</div>						
				<li id="li_1" >
					<label class="description" for="ssn">ssn </label>
			<div>
				<input id="ssn" name="ssn" class="element text small" type="text" maxlength="255" value=""/> 
			</div> 
				<li class="buttons">
					<input type="hidden" name="professorForm" value="01" />    
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</form>	
		<br>

		<form id="professorForm_02" class="appnitro"  method="post" action="php/professorQuery02.php">
		<div class="form_description">
				<h2>How Many Students Get Each Distinct Grade:</h2>
			</div>						
				<li id="li_2" >
					<label class="description" for="courseNumber">course number </label>
			<div>
			<input id="courseNumber" name="courseNumber" class="element text small" type="text" maxlength="255" value=""/> 
			</div>						
				<li id="li_3" >
					<label class="description" for="sectionNumber">section number </label>
			<div>
				<input id="sectionNumber" name="sectionNumber" class="element text small" type="text" maxlength="255" value=""/> 
			</div> 
				<li class="buttons">
					<input type="hidden" name="professorForm" value="02" />    
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</form>	
	</div>
  </div>
</div>