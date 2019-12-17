// Marketing Button

    let getbuttonMarketing = document.querySelectorAll(".marketing");
    let getbuttonProgramming = document.querySelectorAll(".programming");
    let getbuttonDesign = document.querySelectorAll(".design");
    let getCirclePrograming = document.querySelector(".i_programming");
    let getCircleMarketing = document.querySelector(".i_marketing");
    let getCircleDesign = document.querySelector(".i_design");
    let getChangeColorMarketing = document.querySelector(".btnMarketing");
    let getChangeColorProgramming = document.querySelector(".btnProgramming");
    let getChangeColorDesign = document.querySelector(".btnDesign");

    


let buttonMarketingSelectStatus = true; //status

let buttonMarketing = function () {
    // variables
    // condition-1
    if (buttonMarketingSelectStatus === true) {
        getCirclePrograming.style.visibility = "hidden";
        getCircleMarketing.style.visibility = "visible";
        getCircleDesign.style.visibility = "hidden";
        getChangeColorMarketing.style.backgroundColor = "red";
        getChangeColorMarketing.style.color = "black";
        getChangeColorProgramming.style.backgroundColor = "black";
        getChangeColorProgramming.style.color = "white";
        getChangeColorDesign.style.backgroundColor = "black";
        getChangeColorDesign.style.color = "white";
        
        // loop
        let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "block";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "none";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "none";
        }
        // result bellow
        buttonMarketingSelectStatus = false;
        buttonProgrammingSelectStatus = true;
        buttonDesignSelectStatus = true;


    }
    // Condition-2
    else if (buttonMarketingSelectStatus === false) {
        getCirclePrograming.style.visibility = "hidden";
        getCircleMarketing.style.visibility = "hidden";
        getCircleDesign.style.visibility = "hidden";
        getChangeColorMarketing.style.backgroundColor = "black";
        getChangeColorMarketing.style.color = "white";
        getChangeColorProgramming.style.backgroundColor = "black";
        getChangeColorProgramming.style.color = "white";
        getChangeColorDesign.style.backgroundColor = "black";
        getChangeColorDesign.style.color = "white";
    // loop
    let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "block";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "block";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "block";
        }
        // result bellow
        buttonProgramingSelectStatus = true;
        buttonMarketingSelectStatus = true;
        buttonDesignSelectStatus = true;
    }
}

// Programing Button
let buttonProgrammingSelectStatus = true; //status

let buttonProgramming = function () {
    // variables
    

    // Condition-1
    if (buttonProgrammingSelectStatus === true) {
        
        getCirclePrograming.style.visibility = "visible";
        getCircleMarketing.style.visibility = "hidden";
        getCircleDesign.style.visibility = "hidden";
        getChangeColorProgramming.style.backgroundColor = "red";
        getChangeColorProgramming.style.color = "black";
        getChangeColorMarketing.style.backgroundColor = "black";
        getChangeColorMarketing.style.color = "white";
        getChangeColorDesign.style.backgroundColor = "black";
        getChangeColorDesign.style.color = "white";
        
        // Loop

        let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "none";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "block";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "none";
        }

        // result bellow
        buttonProgrammingSelectStatus = false;
        buttonMarketingSelectStatus = true;
        buttonDesignSelectStatus = true;
    }
    // Condition-2
    else if (buttonProgrammingSelectStatus === false) {
        
        getCirclePrograming.style.visibility = "hidden";
        getCircleMarketing.style.visibility = "hidden";
        getCircleDesign.style.visibility = "hidden";
        getChangeColorProgramming.style.backgroundColor = "black";
        getChangeColorProgramming.style.color = "white";
        getChangeColorMarketing.style.backgroundColor = "black";
        getChangeColorMarketing.style.color = "white";
        getChangeColorDesign.style.backgroundColor = "black";
        getChangeColorDesign.style.color = "white";
        // Loop
        let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "block";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "block";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "block";
        }

        buttonProgrammingSelectStatus = true;
        buttonMarketingSelectStatus = true;
        buttonDesignSelectStatus = true;

    }
}

// Design Button 
let buttonDesignSelectStatus = true; //status

let buttonDesign = function () {
    // Variables
    
    // Condition-1
    if (buttonDesignSelectStatus === true) {
        
        getCirclePrograming.style.visibility = "hidden";
        getCircleMarketing.style.visibility = "hidden";
        getCircleDesign.style.visibility = "visible";
        getChangeColorDesign.style.backgroundColor = "red";
        getChangeColorDesign.style.color = "black";
        getChangeColorMarketing.style.backgroundColor = "black";
        getChangeColorMarketing.style.color = "white";
        getChangeColorProgramming.style.backgroundColor = "black";
        getChangeColorProgramming.style.color = "white";

        // Loop

        let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "none";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "none";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "block";
        }
    // Result ellow
        buttonDesignSelectStatus = false;
        buttonMarketingSelectStatus = true;
        buttonProgrammingSelectStatus = true;
    }
    // Condition-2
    else if (buttonDesignSelectStatus === false) {
    
        getCirclePrograming.style.visibility = "hidden";
        getCircleMarketing.style.visibility = "hidden";
        getCircleDesign.style.visibility = "hidden";
        getChangeColorDesign.style.backgroundColor = "black";
        getChangeColorDesign.style.color = "white";
        getChangeColorMarketing.style.backgroundColor = "black";
        getChangeColorMarketing.style.color = "white";
        getChangeColorProgramming.style.backgroundColor = "black";
        getChangeColorProgramming.style.color = "white";
        
        let arrayLength = getbuttonMarketing.length;
        for (let i = 0; i < arrayLength; i++) {
            getbuttonMarketing[i].style.display = "block";
        }
        let arrayLengthpro = getbuttonProgramming.length;
        for (let i = 0; i < arrayLengthpro; i++) {
            getbuttonProgramming[i].style.display = "block";
        }
        let arrayLengthpdes = getbuttonDesign.length;
        for (let i = 0; i < arrayLengthpdes; i++) {
            getbuttonDesign[i].style.display = "block";
        }
    
        // Result ellow
        buttonDesignSelectStatus = true;
        buttonMarketingSelectStatus = true;
        buttonProgrammingSelectStatus = true;

    }

};
// let selectedButton = "Design";
// let clicked = "button" + selectedButton + "SelectStatus";
// console.log(clicked);