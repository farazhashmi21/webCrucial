function greetings(){
    let greeting = "Happy New Year 2021";
    console.log(greeting);
}
function getCurrentYear(){
    let getThisYear = new Date().getFullYear();
    return getThisYear;
}
function hide(){
    let getElement = document.getElementsByClassName("status");//
//    console.log(getElement);
      getElement[0].style.display = "none";
}
function show(){
    let getElementToShow = document.getElementsByClassName("status");
    getElementToShow[0].style.display = "block";
}
