<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Site</title>
	<!-- style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<!-- vue -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


<body>
<div class="wrapper" id="app">
	<div class="header">
		<div class="header__bg">
			<div class="header__bg__content">
				<div class="header__bg__content__top">
					<div class="header__bg__content__top__small-logo">
						<img src="img/logo.png" alt="logo">
						<p>Официальный интернет магазин самоподсекающих удочек</p>
					</div>
					<div class="header__bg__content__top__phone">
						<p>Звоните прямо сейчас</p> 
						<a>8(945) 142-42-36</p>
						<button class="header__bg__content__top__phone__btn"><a href="tel:8(945) 142-42-36">Обратный звонок</a></button>
					</div>
				</div>
				<div class="header__bg__content__logo">
					<div class="header__bg__content__logo__blocks">
						<div class="header__bg__content__logo__blocks__block-left">
							самоподсекающая удочка
						</div>
						<div class="header__bg__content__logo__blocks__block-center">
							Fisher<span class="header__bg__content__logo__blocks__block-center__text-selection">Go</span>Man
						</div>
						<div class="header__bg__content__logo__blocks__block-right">
							+  плетеная леска бесплатно
						</div>
					</div>
				</div>
				<div class="header__bg__content__best">
					<div class="header__bg__content__best__blocks">
						<div class="header__bg__content__best__block">
							<img src="img/fish.png" alt="">
							<p class="upper">Не упусти ни одной поклевки</p>
						</div>
						<div class="header__bg__content__best__block">
							<img src="img/gift.png" alt="">
							<p class="upper">Отличный подарок коллеге, боссу, другу</p>
						</div>
						<div class="header__bg__content__best__block">
							<img src="img/beach.png" alt="">
							<p class="upper">Отдыхай и рыбачь одновременно</p>
						</div>
					</div>
				</div>
				<div class="header__bg__content__sale">
					<div class="header__bg__content__sale__block">
						<p class="upper mus-sans300">Акция<span class="mus-sans900" id="my_timer">5:00</span></p>
						<p class="mus-sans100" style="margin-top: 40px;font-size: 12px;">Закажи удочку в течение 5 минут и получи скидку 10% на заказ.</p>
					</div>
				</div>
				<div class="header__bg__content__contacts">
					<input type="text" placeholder="Введите ваше имя">
					<input type="text" placeholder="Введите ваш номер" v-model="numb">
					<button class="upper"><a class="buy" href="#ninth">Заказать</a></button>
				</div>
			</div>
		</div>
	</div>

	<div class="second">
		<div class="second__title">
			<h4 class="upper mus-sans700">А вот почему заказывают именно у нас:</h4>
		</div>
		<div class="second__three-blocks">
			<div class="second__three-blocks__block">
				<img src="img/money-box.png" alt="">
				<h5 class="mus-sans300">Экономим ваши деньги</h5>
				<h5 class="mus-sans100">Работаем без посредников, и экономим до 1200 рублей ваших денег. <br> Убедитесь сами!</h5>
			</div>
			<img class="second__three-blocks__delimiter" src="img/delimiter.png" alt="">
			<div class="second__three-blocks__block">
				<img src="img/money-return.png" alt="">
				<h5 class="mus-sans300">Вернем ваши деньги</h5>
				<h5 class="mus-sans100">Соблюдаем закон "О защите прав потребителей", и вернем 100% стоимости, если продукт не будет соответствовать описанию.</h5>
			</div>
			<img class="second__three-blocks__delimiter" src="img/delimiter.png" alt="">
			<div class="second__three-blocks__block">
				<img src="img/fair.png" alt="">
				<h5 class="mus-sans300">Гарантируем честность</h5>
				<h5 class="mus-sans100">Посылка отправляется с описью вложения. Вы получите на 100% заказываемый товар.</h5>
			</div>
		</div>
		<div class="second__two-blocks">
			<div class="second__two-blocks__block">
				<img src="img/no-prepayment.png" alt="">
				<h5 class="mus-sans300">Без предоплаты</h5>
				<h5 class="mus-sans100">Получите, убедитесь в качестве и оплатите. Все чисто и прозрачно.</h5>
			</div>
			<img class="second__two-blocks__delimiter" src="img/delimiter.png" alt="">
			<div class="second__two-blocks__block">
				<img src="img/trust.png" alt="">
				<h5 class="mus-sans300">Нам доверяют</h5>
				<h5 class="mus-sans100">11 320 проданных удочек. Из них 30% повторно куплено нашими клиентами. </h5>
			</div>
		</div>
	</div>

	<div class="third">
		<div class="third__title">
			<h5 class="upper mus-sans700 child-1">как работает?</h5>
			<h5 class="upper mus-sans700 child-2">какими свойствами обладает? Из чего состоит?</h5>
		</div>
		<div class="third__blocks fl-dir-column">
			<div class="third__blocks__block-left">
				<p class="mus-sans500 upper">Технические параметры удочки:</p>
				<div class="third__blocks__block-left__table">
					<p class="mus-sans100">Длина: 2,1м; 2,4м; 2,7м; 3,0м </p>
					<p class="mus-sans100">Тест: Extra heavy (экстра тяжелый от 60гр.)</p>
					<p class="mus-sans100">Бланк: Телескопический</p>
					<p class="mus-sans100">Строй: Fast (быстрый) </p>
				</div>
				<div class="third__blocks__block-left__video">
					<p class="mus-sans500 upper">Принцип работы:</p>
					<iframe src="https://www.youtube.com/embed/Z8MdcBdRPng" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			<div class="third__blocks__block-right">
				<p class="mus-sans500 upper third__blocks__block-right__title">из чего состоит наша удочка:</p>
				<div class="third__blocks__block-right__blocks">
					<div class="third__blocks__block-right__block-one">
						<img src="img/handle.png" alt="">
						<p class="mus-sans300 child-2">Рукоятка удилища</p>
						<p class="mus-sans300 child-3">выполнена из материала EVA</p>
						<div class="third__blocks__block-right__block-fourth">
							<img src="img/third-4.png" alt="">
							<p class="mus-sans300 child-2">Бланк удочки выполнен</p>
							<p class="mus-sans300 child-3">из прочного стекловолокна</p>
						</div>
					</div>
					<div class="third__blocks__block-right__block-two">
						<img src="img/third-2.png" alt="">
						<p class="mus-sans300 child-2">Катушкодержатель</p>
						<p class="mus-sans300 child-3">выполнениз крепких сортов пластика</p>
						<div class="third__blocks__block-right__block-three">
							<img src="img/third-3.png" alt="">
							<p class="mus-sans300 child-2">Самоподсекающий механизм</p>
							<p class="mus-sans300 child-3">с тремя уровнями поклевки</p>
						</div>
						<div class="third__blocks__block-right__block-fifth">
							<img src="img/third-5.png" alt="">
							<p class="mus-sans300 child-2">Кольца выполнены из</p>
							<p class="mus-sans300 child-3">карбид-кремния и нержавеющей стали</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fourth">
		<div class="fourth__title">
			<h5 class="mus-sans700 upper child-1">Остерегайтесь фальшивок!</h5>
			<h5 class="mus-sans700 upper child-2">Что отличает нашу удочку от подделки?</h5>
		</div>
		<div class="fourth__blocks fl-dir-column">
			<div class="fourth__blocks__block">
				<img src="img/fourth-1.png" alt="">
				<p class="mus-sans300 child-2">Чувствительность</p>
				<p class="mus-sans100 child-3">Реагирует на рыбу от 300 грамм, что на 200 грамм меньше, 
чем у подделки.</p>
			</div>
			<div class="fourth__blocks__block">
				<img src="img/fourth-2.png" alt="">
				<p class="mus-sans300 child-2">Качество соединений</p>
				<p class="mus-sans100 child-3">Надежно и профессионально. Перед реализацией проводится
 диагностика.</p>
			</div>
			<div class="fourth__blocks__block">
				<img class="big-jpg" src="img/fourth-3.png" alt="">
				<p class="mus-sans300 child-2">Фирменное приложение</p>
				<p class="mus-sans100 child-3">Фирменный тех.пасспорт в приложении, содержащий данные производителя.</p>
			</div>
			<div class="fourth__blocks__block">
				<img src="img/fourth-4.png" alt="">
				<p class="mus-sans300 child-2">Механика</p>
				<p class="mus-sans100 child-3">Надежный, как часики, механизм. Легкость и плавность 
действий.</p>
			</div>
		</div>
		<div class="fourth__line"></div>
	</div>

	<div class="fifth">
		<div class="first-open-img absolute">
			<p class="close-open-img-1 mus-sans100">закрыть</p>
			<img src="img/open-1.jpg" alt="">
		</div>
		<div class="second-open-img absolute">
			<p class="close-open-img-2 mus-sans100">закрыть</p>
			<img src="img/open-2.jpg" alt="">
		</div>

		<div class="fifth__title">
			<h5 class="upper mus-sans700">наши сертификаты</h5>
		</div>

		<div class="fifth__blocks-mobile">
			<img src="img/open-1.jpg" alt="">
			<img src="img/open-2.jpg" alt="">
		</div>
		<div class="fifth__blocks">
			<div class="fifth__blocks__block child-1">
				<img class="open-img-1" src="img/fifth-1.png" alt="">
			</div>
			<div class="fifth__blocks__block child-2">
				<img class="open-img-2" src="img/fifth-2.png" alt="">
			</div>
		</div>
	</div>

	<div class="sixth">
		<div class="sixth__title mus-sans700 upper">Выберите свою удочку</div>
		<div class="sixth__blocks">
			<div class="sixth__blocks__block">
				<div class="sixth__blocks__block__blocks">
					<div class="left mus-sans500">Размер:</div>
					<div class="right mus-sans300">2.1м.</div>
				</div>
				<div class="sixth__blocks__block__line"></div>
				<div class="sixth__blocks__block__blocks">
					<div class="sixth__blocks__block__blocks__lef mus-sans500">Цена:</div>
					<div class="sixth__blocks__block__blocks__righ mus-sans300">&nbsp;2490р.</div>
				</div>
				<button class="mus-sans300 buy"><a class="mus-sans300 upper" href="#ninth">Заказать</a></button>
			</div>
			<div class="sixth__blocks__block">
				<div class="sixth__blocks__block__blocks">
					<div class="left mus-sans500">Размер:</div>
					<div class="right mus-sans300">2.4м.</div>
				</div>
				<div class="sixth__blocks__block__line"></div>
				<div class="sixth__blocks__block__blocks">
					<div class="sixth__blocks__block__blocks__lef mus-sans500">Цена:</div>
					<div class="sixth__blocks__block__blocks__righ mus-sans300">2690р.</div>
				</div>
				<button class="mus-sans300 buy"><a class="mus-sans300 upper" href="#ninth">Заказать</a></button>
			</div>
			<div class="sixth__blocks__block">
				<div class="sixth__blocks__block__blocks">
					<div class="left mus-sans500">Размер:</div>
					<div class="right mus-sans300">2.7м.</div>
				</div>
				<div class="sixth__blocks__block__line"></div>
				<div class="sixth__blocks__block__blocks">
					<div class="sixth__blocks__block__blocks__lef mus-sans500">Цена:</div>
					<div class="sixth__blocks__block__blocks__righ mus-sans300">2890р.</div>
				</div>
				<button class="mus-sans300 buy"><a class="mus-sans300 upper" href="#ninth">Заказать</a></button>
			</div>
			<div class="sixth__blocks__block">
				<div class="sixth__blocks__block__blocks">
					<div class="left mus-sans500">Размер:</div>
					<div class="right mus-sans300">3.0м.</div>
				</div>
				<div class="sixth__blocks__block__line"></div>
				<div class="sixth__blocks__block__blocks">
					<div class="sixth__blocks__block__blocks__lef mus-sans500">Цена:</div>
					<div class="sixth__blocks__block__blocks__righ mus-sans300">3190р.</div>
				</div>
				<button class="mus-sans300 buy"><a class="mus-sans300 upper" href="#ninth">Заказать</a></button>
			</div>
		</div>
	</div>
	
	<div class="seventh">
		<div class="seventh__title mus-sans700 upper">Всего 3 шага от желания до наличия</div>
		<div class="seventh__blocks">
			<div class="seventh__blocks__block">
				<img src="img/seventh-1.png" alt="">
			</div>
			<div class="seventh__blocks__block">
				<img src="img/seventh-2.png" alt="">
			</div>
			<div class="seventh__blocks__block">
				<img src="img/seventh-3.png" alt="">
			</div>
		</div>
	</div>

	<div class="eighth">
		<div class="eighth__title mus-sans700 upper">реальные отзывы покупателей</div>
		<div class="eighth__blocks fl-dir-column">
			<div class="eighth__blocks__block">
				<img src="img/eighth-1.png" alt="">
				<p class="eighth__blocks__block__title upper mus-sans500">Иван Дмитриевич</p>
				<p class="mus-sans100">Перед покупкой проштудировал весь интернет, как это полагается. Видел очень много аналогов, но, как оказалось, это не были оригиналы. Знакомый посоветовал этот сайт, и я решил заказать здесь + получил скидку в 20% и приятный подарочек в виде плетенной лески.</p>
			</div>
			<div class="eighth__blocks__block eighth__blocks__block-2">
				<img src="img/eighth-2.png" alt="">
				<p class="eighth__blocks__block__title upper mus-sans500">Дмитрий кузнецов</p>
				<p class="mus-sans100">Недавно купил FisherGoMan. Хотел оценить новинку, так сказать. Мне все очень понравилось, и вопреки некоторым заявлениям (типа она слабо чувствительная или у нее плохие соединения), работает она на ура, потому-что мне посчастливилось купить оригинал. А те, кто привык покупать подделки - пускай и дальше разводят грязь в интернете)</p>
			</div>
			<div class="eighth__blocks__block">
				<img src="img/eighth-3.png" alt="">
				<p class="eighth__blocks__block__title upper mus-sans500">Алексей остапенко</p>
				<p class="mus-sans100">Сделал сыну подарок на день рождения, и, заодно, взял по скидке и себе. Сыну все очень понравилось, часто берет удочку с собой на отдых. Да и мне не плохо, закинул, пока раскладываешь палатку - там уже рыбка выловилась к обеду. Сказка, а не рыбалка! Спасибо FisherGoMan.</p>
			</div>
		</div>
	</div>

	<div class="ninth" id="ninth">
		<div class="ninth__main-title mus-sans700 upper">Заказать FisherGoMan</div>
		<div class="ninth__title">
			<h5 class="mus-sans500 upper">Выбери размер своей удочки и сэкономь 500 рублей на следующей</h5> 
			<h5 class="mus-sans300 upper">Плетенная леска в подарок</h5>
		</div>
		<form action="send.php" method="post" class="ninth__order">
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="bobs-trays.000webhostapp.com">
			<input type="hidden" name="admin_email" value="noviygmul35@gmail.com">
			<input type="hidden" name="form_subject" value=Заявка">
			<!-- END Hidden Required Fields -->
			<div class="card-type"> 
		          <input class="hide" id="one" name="cardtype" type="radio" value="one"> 
		          <label class="mus-sans300 len1" for="one">&nbsp;2.1м.</label> 
		          <input class="hide" id="two" name="cardtype" type="radio" value="two">
		          <label class="mus-sans300 len2" for="two">&nbsp;2.4м.</label> 
		          <input class="hide" id="three" name="cardtype" type="radio" value="three"> 
		          <label class="mus-sans300 len3" for="three">&nbsp;2.7м.</label>
		          <input class="hide" id="four" name="cardtype" type="radio" value="four"> 
		          <label class="mus-sans300 len4" for="four">&nbsp;3.0м.</label>
     	 	</div>
			<div class="header__bg__content__contacts">
				<input class="number" name="numb" type="text" placeholder="Введите ваш номер" v-model="numb">
				<button type="submit" class="upper">Заказать</button>
			</div>
		</form>
	</div>

	<div class="map">
		<div class="map__main-title mus-sans700 upper">Хотите сами забрать свою удочку ?</div>
		<div class="map__title mus-sans500 upper">подберите по карте ближайший склад и сообщите об этом менеджеру</div>

		<iframe class="map__el" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.4630360430833!2d37.59825771565464!3d55.61135838051578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab28988c29061%3A0x433b64b32e4421a!2zVWxpdHNhIEtyYXNub2dvIE1heWFrYSwg0LLQu9Cw0LTQtdC90LjQtSAxLCBNb3NrdmEsIFJvc2phLCAxMTc1MTk!5e0!3m2!1spl!2spl!4v1526756700041" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	

	<div class="footer">
		<div class="footer__blocks">
			<div class="footer__blocks__block footer__blocks__block__img">
				<img src="img/footer-logo.png" alt="">
			</div>
			<div class="footer__blocks__block footer__blocks__block__text">
				<p class="mus-sans100 upper child-1">ооо”тд немо”</p>
				<p class="mus-sans100 upper child-2">инн 45678913265734</p>
				<p class="mus-sans100 upper child-3">огрн 541232304521354132</p>
				<div class="footer__blocks__block__text-down">
					<p class="mus-sans100 child-4">Официальный интернет магазин <br> самоподсекающих удочек</p>
				</div>
			</div>
			<div class="footer__blocks__block footer__blocks__block__conf">
				<p class="mus-sans100">Политика конфиденциальности</p>
			</div>
			<div class="footer__blocks__block footer__blocks__block__block-cont">
				<p class="mus-sans100 footer-gray" style="padding-top: 0px;margin-top: 0px;">Нас можно найти по адресу :</p>
				<p class="mus-sans300">ул. Красного маяка 1к1</p>
				<div class="footer__blocks__block__block-cont__block-2">
					<p class="mus-sans100 footer-gray">Контакты :</p>
					<p class="mus-sans300">fisher.goman@yandex.ru </p>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- script -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
