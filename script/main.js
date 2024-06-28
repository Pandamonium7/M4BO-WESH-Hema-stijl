// Darkmode variables

const rootElement = document.querySelector(":root");
const modeSwitch = document.getElementById("node");




// Darkmode

modeSwitch.checked = true;

modeSwitch.onchange = function(){
    if(modeSwitch.checked === true){
        rootElement.style.setProperty("--invert","none");
        rootElement.style.setProperty("--background-color", "white");
        rootElement.style.setProperty("--font-color", "black");

        return;
    }
    else
    {
        rootElement.style.setProperty("--invert","invert(1)");
        rootElement.style.setProperty("--background-color","#212730");
        rootElement.style.setProperty("--font-color", "#d4d4d4");

    }
}


// Filter
let allGames = document.getElementsByClassName("game");
console.log(allGames);


let filterAdidas = document.getElementById("checkbox--adidas");
let filterPuma = document.getElementById("checkbox--puma");
let filterHoka = document.getElementById("checkbox--hoka");
let filterJordan = document.getElementById("checkbox--jordan");
let filterNike = document.getElementById("checkbox--nike");

let filter = document.getElementsByClassName("filter");

// filters bij begin aan
for( i = 0; i < filter.length; i++){
    filter[i].checked = true;
}


//Adidas Filter
filterAdidas.onchange = function(){
    if(filterAdidas.checked === true){
        for( let i = 0; i < allGames.length; i++){
            if(allGames[i].dataset.merk === "Adidas"){
                 allGames[i].style.display = "block";
            }
      }
    }else{
        for( let i = 0; i < allGames.length; i++){
               if(allGames[i].dataset.merk === "Adidas"){
                    allGames[i].style.display = "none";
               }
         }
    }
}



//Puma Filter
filterPuma.onchange = function(){
    if(filterPuma.checked === true){
        for( let i = 0; i < allGames.length; i++){
            if(allGames[i].dataset.merk === "Puma"){
                 allGames[i].style.display = "block";
            }
      }
    }else{
        for( let i = 0; i < allGames.length; i++){
               if(allGames[i].dataset.merk === "Puma"){
                    allGames[i].style.display = "none";
               }
         }
    }
}


//Hoka Filter
filterHoka.onchange = function(){
    if(filterHoka.checked === true){
        for( let i = 0; i < allGames.length; i++){
            if(allGames[i].dataset.merk === "Hoka"){
                 allGames[i].style.display = "block";
            }
      }
    }else{
        for( let i = 0; i < allGames.length; i++){
               if(allGames[i].dataset.merk === "Hoka"){
                    allGames[i].style.display = "none";
               }
         }
    }
}

//Jordan Filter
filterJordan.onchange = function(){
    if(filterJordan.checked === true){
        for( let i = 0; i < allGames.length; i++){
            if(allGames[i].dataset.merk === "Jordan"){
                 allGames[i].style.display = "block";
            }
      }
    }else{
        for( let i = 0; i < allGames.length; i++){
               if(allGames[i].dataset.merk === "Jordan"){
                    allGames[i].style.display = "none";
               }
         }
    }
}

//Nike SB Filter
filterNike.onchange = function(){
    if(filterNike.checked === true){
        for( let i = 0; i < allGames.length; i++){
            if(allGames[i].dataset.merk === "Nike SB"){
                 allGames[i].style.display = "block";
            }
      }
    }else{
        for( let i = 0; i < allGames.length; i++){
               if(allGames[i].dataset.merk === "Nike SB"){
                    allGames[i].style.display = "none";
               }
         }
    }
}










