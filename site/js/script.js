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
