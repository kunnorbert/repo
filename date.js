function TDate() {
	var UserDate = document.getElementById("userdate").value;
	var years = Math.floor(1000 * 60 * 60 * 24 * 365);
	var years8 = Math.floor(1000 * 60 * 60 * 24 * 365 * 8 / years); //8 ev
    var ToDate = new Date();
	var currentyear = ToDate.getFullYear();
    if ((UserDate > currentyear) || (UserDate <= (currentyear - years8))) {
          alert("Az iratkozás év nem lehet kisebb mint " + currentyear + " - " + years8 + ", és nem lehet nagyobb mint " + currentyear + "!");
          return false;
    }
	return true;
}


