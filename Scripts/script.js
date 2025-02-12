// JavaScript Document

var btnSubmit = document.querySelector("#btnSubmit");

function calc(){
	
	var num1 = document.getElementById("txtNum1").value;
	var num2 = document.getElementById("txtNum2").value;
	
	if(num1 === "" ||num2 === "")
		{
	console.alert("please enter something");
		}
	
	else
		{
			document.forms.form.submit();
		}
}


btnSubmit.addEventListener("click" , calc );