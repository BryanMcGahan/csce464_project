function validateForm(){

	let form = document.getElementById("feedbackForm");
	let email = form.email.value;
	let message = form.message.value;
	let rating = form.rating.value;

	if(validateEmail(email)){
		alert("Thank you for leaving me feedback: " + email + "\nMessage: " + message + "\nRating: " + rating );
	}else{
		alert("The email is incorrectly formatted.")
	}

}

function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}
