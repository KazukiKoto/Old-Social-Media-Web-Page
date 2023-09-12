function DarkMode() {
    document.body.style.backgroundColor = "#121212"
    document.body.style.color = "#f0ecec"
    document.getElementById("ModeChange").src="../Misc/LightLightbulb.png"
    document.getElementById("ModeChange").setAttribute("onClick", "LightMode()")
    document.getElementById("post1").setAttribute("background-color", "black")
}
function LightMode() {
    document.body.style.backgroundColor = "#f0ecec"
    document.body.style.color = "#121212"
    document.getElementById("ModeChange").src="../Misc/DarkLightbulb.png"
    document.getElementById("ModeChange").setAttribute("onClick", "DarkMode()")
} 