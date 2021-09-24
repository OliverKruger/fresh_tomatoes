// Get the modal
const modal = document.getElementById("myModal");

// Get the button that opens the modal
const btn = document.getElementById("btnSubmit");

const closeBtn = document.getElementById("closeBtn");


const url = new URL(window.location.href);
const status = url.searchParams.get("status");

if(status === "1"){
    alert("Oprettet");
    window.history.replaceState(null, null, window.location.pathname);
}


// When the user clicks the button, open the modal
btn.onclick = function() {
    openModal();
}

closeBtn.onclick = function() {
    closeModal();
}

window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}

function openModal(){
    modal.style.display = "block";
}

function closeModal(){
    modal.style.display = "none";
}