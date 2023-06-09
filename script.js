let bar = document.querySelector('.fa-bars');

bar.onclick = () =>{
    bar.classList.toggle('fa-times');
}

const txts = document.querySelector(".content").children,
    txtsLen = txts.length;
  let index = 0;
  const textInTimmer = 5000;
  const textOutTimmer = 1000;


  function animateText(){
    for(let i=0; i<txtsLen; i++){
        txts[i].classList.remove("text-in", "text-out");    
    }
    txts[index].classList.add("text-in");

    setTimeout(function(){
        txts[index].classList.add("text-out");
    }, textOutTimmer)

    if(index == txtsLen-1){
        index = 0;
    }
    else{
        index++;
    }
    setTimeout(animateText,5000);

  }

  window.onload = animateText;



let valueDisplays = document.querySelectorAll(".num");
let interval = 1000;


valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-value"));

    let duration = Math.floor(interval / endValue);

    let counter = setInterval(function() {
        startValue += 1;
        valueDisplay.textContent = startValue;

        if(startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);

});


var swiper = new Swiper(".course-slider", {
    spaceBetween: 20,
    spaceBetween: 25,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,

    loop: true, 
  
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView:3,
        },
    },
});


var swiper = new Swiper(".course-slider2", {
    slidesPerView: 2,
   
    spaceBetween: 25,
    lazyLoading: true,
    loop: true,
   
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,
    keyboard: {
        enabled: true
    },
    
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView:2,
        },
    },

});


var swiper = new Swiper(".course-slider3", {
    spaceBetween: 20,
    spaceBetween: 25,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,

    loop: true, 
  
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView:3,
        },
    },
});




var swiper = new Swiper(".reviews-slider", {
    spaceBetween: 20,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,

    loop: true, 
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".teachers-slider", {
    spaceBetween: 20,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,

    loop: true,  
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 4,

        },
      },
});


var swiper = new Swiper(".staff-slider", {
    spaceBetween: 20,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,

    loop: true,  
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 4,

        },
      },
});

var swiper = new Swiper(".gallery-slider", {
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 24,
    lazyLoading: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    grabCursor: true,
    keyboard: {
        enabled: true
    },

});

ScrollReveal({
    reset: true,
    distance: '60px',
    duration: 1200,
    delay: 400
});

ScrollReveal().reveal('.bgbox');
ScrollReveal().reveal('.about-bgbox');
ScrollReveal().reveal('.course-bgbox');
ScrollReveal().reveal('.review-bgbox');
ScrollReveal().reveal('.teachers-bgbox');
ScrollReveal().reveal('.staff-bgbox');
ScrollReveal().reveal('.contact-bgbox');
ScrollReveal().reveal('.location-bgbox');
ScrollReveal().reveal('.gallery-bgbox');



let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode')


//enabling the dark mode
const enableDarkMode = () =>{
    toggleBtn.classList.replace('fa-moon', 'fa-sun');  //replacing the icon 
    body.classList.add('dark');                       //adding a <div> with class name with class=dark
    localStorage.setItem('dark-mode', 'enabled');     //static transition after refresh

}
//disabling the dark mode
const disableDarkMode = () =>{
    toggleBtn.classList.replace('fa-sun', 'fa-moon');   //replacing the icon back to sun
    body.classList.remove('dark');                      //removing the class class name with class=dark
    localStorage.setItem('dark-mode', 'disabled');      //disable static transition after refresh
}

if(darkMode == 'enabled'){
    enableDarkMode();                 //to check for static transition after refresh
}

//on click arrow function to call enable/disable function for the transition
toggleBtn.onclick = (e) =>{
    darkMode = localStorage.getItem('dark-mode');
    if(darkMode == 'disabled'){
        enableDarkMode();
    }else{
        disableDarkMode();
    }
}




var popupCount = 0;
    var intervalId;

    function createPopup() {
      var popupContainer = document.getElementById("popup-container");

      var popup = document.createElement("div");
      popup.className = "popup";
      popup.innerHTML = `
        <i class="fa-solid fa-x" onclick="hidePopup(this.parentNode)"></i>
        <h2>Popup Title</h2>
        <p>This is the content of Popup ${popupCount + 1}.</p>

      `;

      popupContainer.appendChild(popup);
      popup.classList.add("active");

      popupCount++;
    }

    function hidePopup(popup) {
      popup.parentNode.removeChild(popup);
    }

    intervalId = setInterval(createPopup, 30000);


    // document.getElementById('login-btn').onclick = function() {
    //     window.location.href = "login.php";
    // }
    // document.getElementById('signup-btn').onclick = function() {
    //     window.location.href = "login.php";
    // }