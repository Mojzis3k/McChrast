document.getElementById("ip").addEventListener("click", () => {
   let ip = document.getElementById("ip_hide");

   if (ip.style.opacity === "1") {  
       ip.style.opacity = "0";
       ip.style.transform = "translateY(-10px)";
       setTimeout(() => ip.style.visibility = "hidden", 500); 
   } else {
       ip.style.visibility = "visible";
       ip.style.opacity = "1";
       ip.style.transform = "translateY(0)";
   }
});

