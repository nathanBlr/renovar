import './bootstrap';
import { Tooltip, initTWE,  Carousel,  Ripple, Input, } from "tw-elements";
initTWE({ Tooltip });
initTWE({ Carousel });
initTWE({ Ripple });
initTWE({ Input });
// Initialization for ES Users
// Initialization for ES Users
  // Get the button
  const mybutton = document.getElementById("btn-back-to-top");
  
  // When the user scrolls down 20px from the top of the document, show the button
  
  const scrollFunction = () => {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.classList.remove("hidden");
    } else {
      mybutton.classList.add("hidden");
    }
  };
  const backToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };
  
  // When the user clicks on the button, scroll to the top of the document
  mybutton.addEventListener("click", backToTop);
  
  window.addEventListener("scroll", scrollFunction);



