const AnimationNav=document.querySelector(".hamburger-menu");
const HeaderNav=document.querySelector(".header-links");

AnimationNav.addEventListener("click",()=>{
   if(AnimationNav.classList.contains("Ahmenu")){
       AnimationNav.classList.remove("Ahmenu");
   }else{
       AnimationNav.classList.add("Ahmenu");
   }
HeaderNav.classList.toggle("header-showmenu");
});     
