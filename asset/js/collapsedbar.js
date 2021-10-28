function openNav() {
    document.getElementById("openbtn").style.visibility = "hidden";
    document.getElementById("leftSidebar").style.width = "250px";
    document.getElementById("right-content").style.marginLeft = "250px";
    document.getElementById("footer").style.marginLeft = "250px";

}

function closeNav() {
    document.getElementById("leftSidebar").style.width = "0";
    document.getElementById("right-content").style.marginLeft= "0";
    document.getElementById("footer").style.marginLeft= "0";
    document.getElementById("openbtn").style.visibility = "visible";
}