let barsMenustatus = false;

let barsMenu = function() {
    let getnavsidebar = document.querySelector(".nav-sidebar"); 
    let getwidth = document.querySelector(".nav-sidebar");

    if (barsMenustatus === false) {
    getnavsidebar.style.visibility = "visible";
    getwidth.style.width = "95vw";

    barsMenustatus = true;
    }
    else if (barsMenustatus === true) {
    getnavsidebar.style.visibility = "hidden";

    barsMenustatus = false;
    }
}

let barsMenuClosestatus = true;

let barsMenuClose = function() {
    let getnavsidebar = document.querySelector(".nav-sidebar"); 
    let getwidth = document.querySelector(".nav-sidebar");

    if (barsMenustatus === true) {
        getnavsidebar.style.visibility = "hidden";
        getwidth.style.width = "0vw";

        barsMenuClosestatus = false;
        barsMenustatus = false;
    }
    else if (barsMenustatus === false) {
        getnavsidebar.style.visibility = "visible";

        barsMenuClosestatus = true;
        barsMenustatus = false;
    }
}

// ------------------------------------------------------------------------------


