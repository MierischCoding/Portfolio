//OBJECT ARRAY FOR ALL MY REFERENCES 
var references = [
    {name: "Shane Augustus", email: "Shane.Augustus@vistastaff.com", phone: 8013109397, img:"http://www.jonathanmierisch.slccwebdev.com/pictures/References%20Photo.PNG"},
    {name: "Lauren Schneurstein", email: "Lauren.Schneurstein@vistastaff.com", phone: 8014038268, img:"http://www.jonathanmierisch.slccwebdev.com/pictures/References%20Photo.PNG"},
    {name: "Gigi Peeples", email: "Gigi.Peeples@vistastaff.com", phone: 4049189421, img:"http://www.jonathanmierisch.slccwebdev.com/pictures/References%20Photo.PNG"}
];

//select items

const img = document.getElementById("person-img");
const name = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");

const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const randomBtn = document.querySelector(".random-btn");

// set starting item

let currentItem = 0;

// load intial item
window.addEventListener("DOMContentLoaded", function(){
  showPerson(currentItem);
});

// show person based on item

function showPerson(person) {
  const item = references[person];
  img.src = item.img;
  name.textContent = item.name;
  email.textContent = item.email;
  phone.textContent = item.phone;
}

// show next person

nextBtn.addEventListener("click", function(){
  currentItem++;
  if(currentItem < 0) {
    currentItem = references.length - 1;
  }
  showPerson(currentItem);
});

// show previous person

prevBtn.addEventListener("click", function(){
  currentItem--;
  if(currentItem > references.length - 1) {
    currentItem = 0;
  }
  showPerson(currentItem);
});

// show random person

randomBtn.addEventListener("click", function() {
  currentItem = Math.floor(Math.random() * references.length);
  showPerson(currentItem);
});

//Hide & Show Experience
$("#showhide").hide();
$(document).ready(function(){
  $("#hide").click(function(){
    $("#showhide").hide();
  });
  $("#show").click(function(){
    $("#showhide").show();
  });
});