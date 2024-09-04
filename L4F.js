document.getElementById('loginBtn').addEventListener('click', function() {
    document.getElementById('id02').style.display = 'block';
    document.getElementById('id01').style.display = 'none';
});

document.getElementById('signupBtn').addEventListener('click', function() {
    document.getElementById('id01').style.display = 'block';
    document.getElementById('id02').style.display = 'none';
});

// Get the modals
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modals, close them
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

function redirectToHome() {
    window.location.href = 'home.html';
}

function redirectToBrowse() {
    window.location.href = 'all.html';
}

function redirectToBrowseIn() {
    window.location.href = 'all_interactive.html';
}

function redirectToAdd() {
    window.location.href = 'addrev.html#rev-1';
}

function redirectToRest1() {
    window.location.href = 'restoNusantara.php#pic-1';
}

function redirectToRest2() {
    window.location.href = 'sakuraSushi.php#pic-2';
}

function redirectToRest3() {
    window.location.href = 'greenGarden.php#pic-3';
}

function showDineIn() {
    document.getElementById("rest1").classList.remove("hidden");
    document.getElementById("rest2").classList.remove("hidden");
    document.getElementById("rest3").classList.add("hidden");
    document.getElementById("rest4").classList.add("hidden");
    document.getElementById("rest5").classList.add("hidden");
    document.getElementById("rest6").classList.add("hidden");
    document.getElementById("rest7").classList.add("hidden");
    document.getElementById("rest8").classList.add("hidden");
    document.getElementById("rest9").classList.add("hidden");
}

function showTakeAway() {
    document.getElementById("rest1").classList.add("hidden");
    document.getElementById("rest2").classList.add("hidden");
    document.getElementById("rest3").classList.remove("hidden");
    document.getElementById("rest4").classList.add("hidden");
    document.getElementById("rest5").classList.remove("hidden");
    document.getElementById("rest6").classList.remove("hidden");
    document.getElementById("rest7").classList.remove("hidden");
    document.getElementById("rest8").classList.remove("hidden");
    document.getElementById("rest9").classList.remove("hidden");
}

function showAll() {
    document.getElementById("rest1").classList.remove("hidden");
    document.getElementById("rest2").classList.remove("hidden");
    document.getElementById("rest3").classList.remove("hidden");
    document.getElementById("rest4").classList.remove("hidden");
    document.getElementById("rest5").classList.remove("hidden");
    document.getElementById("rest6").classList.remove("hidden");
    document.getElementById("rest7").classList.remove("hidden");
    document.getElementById("rest8").classList.remove("hidden");
    document.getElementById("rest9").classList.remove("hidden");
}

function showAddReview() {
    document.getElementById("showReview").classList.add("hidden");
    document.getElementById("review").classList.remove("hidden");
    window.location.href = '#rev-1';
}

function showReview() {
    document.getElementById("review").classList.add("hidden");
    document.getElementById("showReview").classList.remove("hidden");
    window.location.href = '#showRev';   
}
