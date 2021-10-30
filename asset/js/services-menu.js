// On click open #services-menu content
function opend1() {
    document.getElementById("d1").style.display = "block";
    document.getElementById("d2").style.display = "none";
    document.getElementById("d3").style.display = "none";
    document.getElementById("d4").style.display = "none";
}
function opend2() {
    document.getElementById("d2").style.display = "block";
    document.getElementById("d1").style.display = "none";
    document.getElementById("d3").style.display = "none";
    document.getElementById("d4").style.display = "none";
}
function opend3() {
    document.getElementById("d3").style.display = "block";
    document.getElementById("d1").style.display = "none";
    document.getElementById("d2").style.display = "none";
    document.getElementById("d4").style.display = "none";
}
function opend4() {
    document.getElementById("d4").style.display = "block";
    document.getElementById("d1").style.display = "none";
    document.getElementById("d2").style.display = "none";
    document.getElementById("d3").style.display = "none";
}

// On click add text-decoration for #services-menu <a> tags
$('#services-menu li').on('click', function() {
    $('#services-menu li.active').removeClass('active');
    $(this).addClass('active');
 });