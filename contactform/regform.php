<body>
<div class="maindiv">
<!--HTML Form -->
<div class="regform">
<div class="title">
<h2>Registration for NAAD</h2>
</div>
<form action="api/formsql.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Fill this form: </h2>

<label>Name</label>
<input name="Name" type="text" value="">

<label>School/College Name</label>
<input name="School_College" type="text" value="">

<label>Email ID</label>
<input name="Email" type="text" value="">

<label>Contact Number</label>
<input name="ContactNum" type="text" value="">

<label>Roll Number (For College students only)</label>
<input name="CollegeRoll" type="text" value="">

<label>Branch (For College students only)</label>
<input name="Branch" type="text" value="">

<label>Gender</label>
<input name="Gender" type="text" value="">

<input name="submit" type="submit" value="Register">
</form>
</div>
</div>
</body>