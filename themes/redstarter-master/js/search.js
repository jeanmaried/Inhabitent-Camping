window.onload=function(){
	var hi = document.getElementById("search_glass");

hi.addEventListener("click", function(){

    var x = document.getElementById('search');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
});
};