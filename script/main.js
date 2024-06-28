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
