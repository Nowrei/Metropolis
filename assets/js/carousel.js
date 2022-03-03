let imgObject = [
    "https://media.paperblog.fr/i/877/8779526/metropolis-origines-sf-L-ddP0Z2.jpeg",
    "https://fr.web.img2.acsta.net/r_1280_720/img/4f/09/4f091489f8ac78ceb84b3cd38ab5b36e.jpg",
    "https://i.pinimg.com/736x/a7/53/93/a75393a29a6536878a47fa765924e699--dr-caligari-le-cabinet.jpg",
    "https://www.cinemaclock.com/images/posters/1000x1500/9/nosferatu-1922-us-poster.jpg",
    
  ];
  
  let mainImg = 0;
  let prevImg = imgObject.length - 1;
  let nextImg = 1;
  
  function loadGallery() {
  
    let mainView = document.getElementById("mainView");
    mainView.style.background = "url(" + imgObject[mainImg] + ")";
  
    let leftView = document.getElementById("leftView");
    leftView.style.background = "url(" + imgObject[prevImg] + ")";
    
    let rightView = document.getElementById("rightView");
    rightView.style.background = "url(" + imgObject[nextImg] + ")";
    
    let linkTag = document.getElementById("linkTag")
    linkTag.href = imgObject[mainImg];
  
  };
  
  function scrollRight() {
    
    prevImg = mainImg;
    mainImg = nextImg;
    if (nextImg >= (imgObject.length -1)) {
      nextImg = 0;
    } else {
      nextImg++;
    };
    
    loadGallery();
  };
  
  function scrollLeft() {
    nextImg = mainImg
    mainImg = prevImg;
     
     if (prevImg === 0) {
      prevImg = imgObject.length - 1;
    } else {
      prevImg--;
    };
    
    loadGallery();
  }
  
  
  
  
  
  
  document.getElementById("navRight").addEventListener("click", scrollRight);
  document.getElementById("navLeft").addEventListener("click", scrollLeft);
  document.getElementById("rightView").addEventListener("click", scrollRight);
  document.getElementById("leftView").addEventListener("click", scrollLeft);
  document.addEventListener('keyup',function(e){
      if (e.keyCode === 37) {
      scrollLeft();
    } else if(e.keyCode === 39) {
      scrollRight();
    }
  });
  
  loadGallery();