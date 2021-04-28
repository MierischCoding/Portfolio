var today = new Date();
var hourNow = today.getHours();
var greeting;
var name = prompt("Welcome! Please enter your name so we can get to know each other.");

if (hourNow > 18) 
{greeting = "Good evening "+ name + " thank you for visiting my page!";}
    else if (hourNow > 12) 
{greeting = "Good afternoon "+ name + " thank you for visiting my page!";}
    else 
{greeting ="Good morning "+ name + " thank you for visiting my page!";}

alert(greeting);