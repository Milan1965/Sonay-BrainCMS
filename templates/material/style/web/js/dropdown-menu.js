function dropdown() {
    document.getElementById("dropDown").classList.toggle("slow");
}

window.onclick = function(e) {
    if(!e.target.matches(".dropNav")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for(i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if(openDropdown.classList.contains("show"))
                openDropdown.classList.remove("show");
        }
    }
}