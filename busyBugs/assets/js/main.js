// Login Modal
// Get the modal
var modal = document.getElementById("log-modal");

// Get the button that opens the modal
// var btn = document.getElementById("log-btn");

// When the user clicks the button, open the modal
function log_mod(){
  modal.style.display = "block";
  modal1.style.display = "none";
}

// When the user clicks on(x), close the modal
function l_close() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }

// Login Form Validation
function log_val(){

  l_user = document.getElementById('log_user');
  l_pass = document.getElementById('log_pass');

  if(l_user.value == ""){
      alert("Enter username");
      l_user.focus();
    return false;
  }

   else if (l_pass.value == "") {
      alert("Enter password");
      l_pass.focus();
    return false;
  }
}

// SignUp Modal
// Get the modal
var modal1 = document.getElementById("sign-modal");

// Get the button that opens the modal
// var btn = document.getElementById("sign-btn");

// When the user clicks the button, open the modal
function sign_mod(){
  modal1.style.display = "block";
  modal.style.display = "none";
}

// When the user clicks on(x), close the modal
function s_close() {
  modal1.style.display = "none";
}

//category modal
var cat_mod = document.getElementById("cat-div");

// When the user clicks the button, open the modal
function cat_modal(){
  cat_mod.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
  if (event.target == cat_mod) {
    cat_mod.style.display = "none";
  }
}


function addo() {
    // Create a new div element
    var newDiv = document.createElement("div");

    // Set the HTML content for the new div (replace this with your desired HTML content)
    newDiv.innerHTML = `
      <div class="col-md-6" style="display:grid; grid-template-columns: 100% 30%;">
        <input type="radio" name="slide" value="">
        <button style="width:100px;border:2px solid black;border-radius:10%" onclick="deleteContent(this.parentNode)">Remove</button>
        <br/>
      </div>

    `;

    // Append the new div to the container
    document.getElementById("container").appendChild(newDiv);
}

function deleteContent(element) {
    // Remove the parent element (which is the div containing the added content)
    element.parentNode.removeChild(element);
}


// Disabled right click
// document.addEventListener("contextmenu", (event) => {
//   event.preventDefault();
// });
