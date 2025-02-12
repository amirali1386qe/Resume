// JavaScript Document

let btn = document.querySelector("#btnSubmit");



btn.addEventListener("click" , function calc(event)
	{
	event.preventDefault();
let score1 = Number(document.getElementById("score1").value);
let score2 = Number(document.getElementById("score2").value);
let score3 = Number(document.getElementById("score3").value);
let score4 = Number(document.getElementById("score4").value);
let score5 = Number(document.getElementById("score5").value);

if(score1<0||score1>20||isNaN(score1)||score1 == ""||
   score2<0||score2>20||isNaN(score2)||score2 == ""||
   score3<0||score3>20||isNaN(score3)||score3 == ""||
   score4<0||score4>20||isNaN(score4)||score4 == ""||
   score5<0||score5>20||isNaN(score5)||score5 == "")
   {
   alert("invalid number");
   }

else
	{
		document.forms.Main.submit();
	}
});