let bg = document.getElementById("bg");
            let moon = document.getElementById("moon");
            let mountain = document.getElementById("mountain");
            let road = document.getElementById("road");

            window.addEventListener('scroll', function(){
                var value = window.scrollY;

                bg.style.top = value*0 + 'px';
                moon.style.left = -value*0.6 + 'px';
              
            })