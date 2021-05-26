let menubar=document.getElementById('menubar');
let navbar=document.getElementById("navbar");
let header=document.getElementById('head');
menubar.addEventListener("click",()=>{
	menubar.classList.toggle("fa-times");
	navbar.classList.toggle("navbar-toggle");

});
window.addEventListener("scroll",()=>{
	if(window.pageYOffset>=100){
		header.setAttribute("style","background-color:#6a5acd");
		// header.setAttribute("style","position:fixed ; left:0; top:0")
	}
	
});
