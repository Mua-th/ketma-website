document.addEventListener("DOMContentLoaded", function(event) {

// Get the parent element
var parentElement = document.getElementById('animated'); // Replace 'parentElementId' with the actual ID of the parent element

let ket = document.createElement("span");
ket.innerHTML="KETMA"
ket.setAttribute("class","logosp");
parentElement.appendChild(ket);


// Append the new element to the parent element
for (let i =0 ; i<2;i++){
   
// Create the new element
var newElement = document.createElement('img');
parentElement.prepend(newElement);

// Add content to the new element if needed
newElement.src="img/kesl.png";
newElement.alt="";
newElement.id="anim"+i;
newElement.style="margin : -10px";
}

console.log("done");
})

