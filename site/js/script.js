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
	lenTwo.style.background = "#none";
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
