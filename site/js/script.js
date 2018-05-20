var app = new Vue ({
	el: "#app",
	data: {
		numb: 'g'
	}
});

var linkNav = document.querySelectorAll('[href^="#"]'), //выбираем все ссылки к якорю на странице
    V = 1;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) { //по клику на ссылку
        e.preventDefault(); //отменяем стандартное поведение
        var w = window.pageYOffset,  // производим прокрутка прокрутка
            hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
        t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
            start = null;
        requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
            window.scrollTo(0,r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash  // URL с хэшем
            }
        }
    }, false);
}


// Открытие сертификатов при нажатии
var openImgOne = document.querySelector('.open-img-1');
var openImgTwo = document.querySelector('.open-img-2');

var blockOpenOne = document.querySelector('.first-open-img');
var blockOpenTwo = document.querySelector('.second-open-img');

var closeOpenOne = document.querySelector('.close-open-img-1');
var closeOpenTwo = document.querySelector('.close-open-img-2');

openImgOne.addEventListener("click", function () {
	blockOpenOne.style.display = "block";
});

openImgTwo.addEventListener("click", function () {
	blockOpenTwo.style.display = "block";
});

closeOpenOne.addEventListener("click", function () {
	blockOpenOne.style.display = "none";
});
closeOpenTwo.addEventListener("click", function () {
	blockOpenTwo.style.display = "none";
});


// активная длина удочки при нажатии
var lenOne = document.querySelector('.len1');
var lenTwo = document.querySelector('.len2');
var lenThree = document.querySelector('.len3');
var lenFour = document.querySelector('.len4');

lenOne.addEventListener("click", function () {
	lenOne.style.background = "#0088D6";
	lenTwo.style.background = "none";
	lenThree.style.background = "none";
	lenFour.style.background = "none";
});
lenTwo.addEventListener("click", function () {
	lenTwo.style.background = "#0088D6";
	lenOne.style.background = "none";
	lenThree.style.background = "none";
	lenFour.style.background = "none";
});
lenThree.addEventListener("click", function () {
	lenThree.style.background = "#0088D6";
	lenTwo.style.background = "none";
	lenOne.style.background = "none";
	lenFour.style.background = "none";
});
lenFour.addEventListener("click", function () {
	lenFour.style.background = "#0088D6";
	lenTwo.style.background = "none";
	lenOne.style.background = "none";
	lenThree.style.background = "none";
});


// Таймер
var tim = document.querySelector('.timer');

function startTimer() {
    var my_timer = document.getElementById("my_timer");
    var time = my_timer.innerHTML;
    var arr = time.split(":");
    var m = arr[0];
    var s = arr[1];
    if (s == 0) {
      if (m == 0) {
      	my_timer.innerHTML = "Время вышло!";
          return;
      }
      m--;
      if (m < 10) m = "0" + m;
      s = 59;
    }
    else s--;
    if (s < 10) s = "0" + s;
    document.getElementById("my_timer").innerHTML = m+":"+s;
    setTimeout(startTimer, 1000);
  }

window.onload = function () {
	startTimer();
};