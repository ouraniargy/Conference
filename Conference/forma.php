<!DOCTYPE html>
<html>
 <head>
	<title> Δημιουργία φόρμας συλλογής στοιχείων </title>
	<link  href="mystyle5.css" rel="stylesheet" type="text/css">
 </head>
 <body>
	<form id="form1" method="post" action="erg.php"	style="text-align:center;">
	<h1 class="h1">Φόρμα Εγγραφής </h1>
		<fieldset>
			<div class="position"> Όνομα &nbsp; &nbsp; <input required name="onoma" placeholder="Εισάγετε το όνομά σας" type="text" pattern="[A-Za-zΑ-Ωα-ω]+"/> </div>
			<!--ΔΕΧΕΤΑΙ ΛΑΤΙΝΙΚΑ ΚΑΙ ΕΛΛΗΝΙΚΑ ΓΡΑΜΜΑΤΑ-->
			<br>
			<br>
			<div class="position">Επώνυμο &nbsp; &nbsp; <input required name="eponymo" placeholder="Εισάγετε το επώνυμό σας" name="lastname" pattern="[A-Za-zΑ-Ωα-ω]+" type="text"/> </div>
			<!--ΔΕΧΕΤΑΙ ΛΑΤΙΝΙΚΑ ΚΑΙ ΕΛΛΗΝΙΚΑ ΓΡΑΜΜΑΤΑ-->
			<br>
			<br>
			<form name="form3" name="fylo">
				<label for="Φύλο">Φύλο &nbsp; &nbsp; </label>
				 MR <input type="radio" onClick="filo( p="MR")" id="Φύλο" name="φύλο" value="1" /> 
				 MRS <input type="radio" onClick="filo( p="MRS")"  name="φύλο" id="Φύλο" value="1" /> 
			</form>
			<br>
			<br>
			E-mail &nbsp; &nbsp; <input required name="email" placeholder="Εισάγετε E-mail" type="email" />
			<!--ΔΕΧΕΤΑΙ MONO email-->
			<br>
			<br>
			Τηλέφωνο &nbsp; &nbsp; <input required placeholder="Εισάγετε τηλέφωνο" name="tilefono" pattern="[0-9]{10}" type="text" />
			<!--ΔΕΧΕΤΑΙ ΕΩΣ 10 ΝΟΥΜΕΡΑ-->
			<br>
			<br>
			<div class="position">Username &nbsp; &nbsp; <input required placeholder="Εισάγετε username" name="username" pattern="[A-Za-z]+" minlength="6" maxlength="8"  type="text"/> </div>
			<!--ΔΕΧΕΤΑΙ MONO ΛΑΤΙΝΙΚΑ ΑΠΟ 6 ΕΩΣ 8 ΧΑΡΑΚΤΗΡΕΣ-->
			<br>
			<br>
			Password &nbsp; &nbsp; <input required type="password" name="password" minlength="6" maxlength="8"  />
			<!--ΔΕΧΕΤΑΙ MONO ΛΑΤΙΝΙΚΑ ΑΠΟ 6 ΕΩΣ 8 ΧΑΡΑΚΤΗΡΕΣ-->
			<br>
			<br>
			Confirm Password &nbsp; &nbsp; <input required type="password" name="password" minlength="6" maxlength="8" />
			<!--ΔΕΧΕΤΑΙ MONO ΛΑΤΙΝΙΚΑ ΑΠΟ 6 ΕΩΣ 8 ΧΑΡΑΚΤΗΡΕΣ-->
			<br>
			<br> 
			<input type="checkbox" onClick="agree()" name="opinion" id="opinion" /> &nbsp; &nbsp; Συμφωνείτε να λαμβάνετε ενημερωτικά email;</br>
			<br>
			<br>
			</fieldset>
		</form>
		<button class="button button1" type="reset" form="form1" value="reset">Ακυρωση</button>
		<button class="button button2" type="submit" form="form1" value="submit">Αποστολή</button>
		<script>
			function filo(p) {

				apfilu=p;
				return apfilu;
				}

			function agree() {
				alert("Πείτε μας τους λόγους με τους οποίους συμφωνείτε ή διαφωνείτε  να λαμβάνετε email.");
				var answer = prompt("Καταθέστε την απαντησή σας:");
				var answer = document.getElementById("opinion");
            }
		</script>
	</body>
</html>