<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.min.css" />
  <link rel="icon" href="./img/another/favicon.ico" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap&_v=20220530013438"
    rel="stylesheet" />
  <title>Бк Амур</title>
</head>

<body id="body">
  <div class="wrapper">
    <header class="header lock-padding" id="header">
      <div class="container">
        <div class="header__body">
          <div class="header__logo">
            <a href="./index.php" class="header__link">
              <picture>
                <source srcset="img/another/logo.webp" type="image/webp" />
                <img
                  src="img/another/logo.png"
                  alt="Logo"
                  class="header__logo" />
              </picture>
            </a>
          </div>
          <div class="header__burger" id="HBurger">
            <span></span>
          </div>
          <nav class="header__menu" id="HMenu">
            <ul class="header__list">
              <li>
                <a href="./index.php" class="header__link active">Главная</a>
              </li>
              <li>
                <a href="./about.html" class="header__link">О баскетболе</a>
              </li>
              <li>
                <a href="./media.html" class="header__link">Медиа</a>
              </li>
              <li>
                <a href="./training-schedule.html" class="header__link">Расписание</a>
              </li>
              <li>
                <a href="./team.html" class="header__link">Команда</a>
              </li>
              <li>
                <a href="./contacts.html" class="header__link">Контакты</a>
              </li>
              <li>
                <a href="./payment.html" class="header__link">Оплата</a>
              </li>
              <li class="header__user">
                <?php if (isset($_SESSION['user'])): ?>
                  <!-- Если пользователь авторизован, показываем имя -->
                  <a href="#" class="header__link"><?php echo htmlspecialchars($_SESSION['user']); ?></a>
                  <ul class="dropdown-menu">
                    <li><a href="authorization.php?action=logout">Выйти</a></li>
                  </ul>
                <?php else: ?>
                  <!-- Если пользователь не авторизован, показываем ссылку на авторизацию -->
                  <a href="./loginForm.php" class="header__link">Авторизация</a>
                <?php endif; ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
      <!--Главный экран  -->
      <section class="amur-club">
        <div class="amur-club__body body">
          <div class="body-about about">
            <div class="about-column">
              <div class="about-column__next-game">
                <div class="next-game__column">
                  <span class="game-text"> next game </span>
                  <div class="next-game__home">
                    <h1>БК «Амур»</h1>
                  </div>
                  <div class="next-game__away">Андреевский флаг</div>
                  <!--Cooming soon-->
                  <div class="date">20.06.2022</div>
                </div>
              </div>
              <div class="about-column__last-game">
                <div class="last-game__column">
                  <span class="game-text">LAST GAME</span>
                  <div class="last-game__home">
                    БК «Амур»
                    <div class="score">114</div>
                  </div>
                  <div class="last-game__away">
                    Айсберг 4
                    <div class="score">16</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- --------- -->
      <!-- Запись на первую тренировку -->
      <section class="first-training">
        <div class="first-training__body">
          <div class="first-training__container">
            <div class="first-training__entry entry">
              <div class="entry__title">
                <h2>Тренировки по баскетболу с 12 до 18 лет.</h2>
              </div>
              <div class="entry__text">
                Запишитесь на бесплатное пробное занятие
              </div>
              <a href="#popup__activity" class="popup__link">
                <div class="button entry__btn">
                  Записаться на пробное занятие
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- --------- -->
      <!-- Блок о клубе -->
      <section class="we">
        <div class="we__container">
          <div class="we__body">
            <div class="we__content">
              <div class="we-header__text">
                <div class="we-header__text-title title">
                  <h2>Вам у нас понравится</h2>
                </div>
                <div class="we-header__text-subtitle">
                  Уже через 2 месяца ваш ребенок, будет более здоровым, найдет
                  новых спортивных друзей и научится играть в баскетбол.
                  <h3 class="title">
                    Мы проводим только безопасные тренировки:
                  </h3>
                  <ol>
                    <li>
                      Разминка - уделяем много внимания растяжке, координации
                      движений и подготовке всех мышц к последующей
                      тренировке.
                    </li>
                    <li>
                      Усиленный тренерский контроль - тренер внимательно
                      следит за тренировочным процессом и дисциплиной
                    </li>
                    <li>
                      Методика тренировок - мы тщательно подбираем нагрузку
                      исходя из физических особенностей детей, что позволяет
                      избежать перегрузок на тренировке.
                    </li>
                  </ol>
                </div>
              </div>
              <div class="we__title title">
                <h3>
                  Какую пользу принесут занятия по баскетболу для вашего
                  ребенка?
                </h3>
              </div>
              <div class="we-row">
                <div class="we-row__card">
                  <div class="we-row__card-text">
                    Баскетбол - это игра, которая позволяет ребёнку
                    почувствовать себя частью команды, учиться жить и работать
                    в одном направлении со своими партнёрами, уважать интересы
                    каждого человека в команде и уметь всем вместе
                    преодолевать трудности и радоваться победам.
                  </div>
                  <div class="we-row__card-img">
                    <div class="card-img ibg">
                      <picture>
                        <source
                          srcset="img/First-training/1.webp"
                          type="image/webp" />
                        <img src="img/First-training/1.jpg" alt="" />
                      </picture>
                    </div>
                  </div>
                </div>
                <div class="we-row__card">
                  <div class="we-row__card-text">
                    Баскетбол развивает координацию движений. Ребёнок учится
                    правильно бегать, прыгать, чувствовать пространство. Играя
                    в баскетбол дети незаметно для себя повышают свой уровень
                    физической подготовки: общую выносливость, силу и
                    скорость.
                  </div>
                  <div class="we-row__card-img">
                    <div class="card-img ibg">
                      <img
                        loading="lazy"
                        src="img/First-training/2.jpg"
                        alt="" />
                    </div>
                  </div>
                </div>
                <div class="we-row__card">
                  <div class="we-row__card-text">
                    Очень часто баскетбол называют вторыми шахматами. В игре
                    очень много моментов, когда детям приходится принимать
                    трудные решения в очень короткий временной промежуток
                    времени.
                  </div>
                  <div class="we-row__card-img">
                    <div class="card-img ibg">
                      <img
                        loading="lazy"
                        src="img/First-training/6.jpg"
                        alt="" />
                    </div>
                  </div>
                </div>
                <div class="we-row__card">
                  <div class="we-row__card-text">
                    Баскетбол универсальная игра. В ней в равной степени
                    развиваются все группы мышц и внутренние системы организма
                    ребёнка. Она полезна для поддержания тонуса организма в
                    любом возрасте, именно поэтому мы также проводим занятия
                    для взрослых групп.
                  </div>
                  <div class="we-row__card-img">
                    <div class="card-img ibg">
                      <img
                        loading="lazy"
                        src="img/First-training/4.jpg"
                        alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="we__title title">
                <h3>Наши группы</h3>
              </div>
              <div class="we-groups">
                <div class="we-groups__row">
                  <div class="we-groups__card">
                    <div class="we-groups__card-img">
                      <picture>
                        <source
                          srcset="img/groups/2.webp"
                          type="image/webp" />
                        <img pos="center" src="img/groups/2.jpg" alt="" />
                      </picture>
                    </div>
                    <div class="we-groups__card-title">6–9 лет</div>
                    <div class="we-groups__card-subtitle">
                      <p>
                        Это возраст, когда дети познают баскетбол благодаря
                        фундаментальным двигательным навыкам и базовым
                        баскетбольным движениям.
                      </p>
                    </div>
                  </div>
                  <div class="we-groups__card">
                    <div class="we-groups__card-img">
                      <picture>
                        <source
                          srcset="img/groups/5.webp"
                          type="image/webp" />
                        <img pos="center" src="img/groups/5.jpg" alt="" />
                      </picture>
                    </div>
                    <div class="we-groups__card-title">10–13 лет</div>
                    <div class="we-groups__card-subtitle">
                      <p>
                        Это основной двигательный этап. В это время дети
                        готовы к приобретению базовых баскетбольных навыков —
                        техническими и тактическими навыками баскетбола
                      </p>
                    </div>
                  </div>
                  <div class="we-groups__card">
                    <div class="we-groups__card-img">
                      <picture>
                        <source
                          srcset="img/groups/3.webp"
                          type="image/webp" />
                        <img pos="top" src="img/groups/3.jpg" alt="" />
                      </picture>
                    </div>
                    <div class="we-groups__card-title">14–17 лет</div>
                    <div class="we-groups__card-subtitle">
                      <p>
                        В этом возрасте спортсмены проходят индивидуальную и
                        командную подготовку. Ученики обладают достаточными
                        спортивными навыками и учатся пользоваться ими в
                        игровых условиях.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="we__title title">
                <h3>Тренер</h3>
              </div>
              <div class="we-trainer">
                <div class="we-trainer__row">
                  <div class="we-trainer__row-photo">
                    <img loading="lazy" src="img/groups/trainer.jpg" alt="" />
                  </div>
                  <div class="we-trainer__row-text">
                    <p><strong>Приветствую!</strong></p>
                    <p>
                      <strong>
                        Я, Антон Путько, мастер спорта по баскетболу,
                        основатель клуба и главный тренер.
                      </strong>
                    </p>
                    <p>
                      Приглашаю Вас вступить в нашу баскетбольную семью.Мы
                      используем только новое оборудование и методики. Мы
                      работаем с любым ребёнком, вне зависимости умеет он
                      играть или нет, высокого роста или низкого, так же
                      занимаемся с детьми, которые имеют лишний вес. Баскетбол
                      - это командный вид спорта. Мы создаём на тренировке
                      благоприятную атмосферу для занятий этим удивительным
                      видом спорта. Ждём вас у нас на тренировках. 2 правила,
                      которые должен соблюдать каждый игрок, занимающийся в
                      центре:
                    </p>
                    <p><strong>Уважение</strong></p>
                    <p>
                      Уважение к тренеру, уважение к «игре» и сопернику и
                      уважение самого себя за постоянную борьбу с искушениями,
                      за готовность и волю встать и идти тренироваться, тогда,
                      как другие жалуются на недостаток времени и боль, находя
                      для себя массу оправданий. Уважение другого начинается с
                      уважения себя, что в свою очередь требует определенного
                      самовоспитания и дисциплины.
                    </p>
                    <p><strong>Самодисциплина</strong></p>
                    <p>
                      В жизни любого спортсмена важную роль играет дисциплина.
                      Без хорошей дисциплинированности, трудно добиться каких
                      либо результатов и достижений в спорте. Каждому
                      спортсмену известно, что для достижения своих целей
                      нужны регулярные тренировки, правильный режим питания,
                      распорядок дня, а также правильный рацион питания.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ---------- -->
      <!-- Команда -->
      <section class="basketball-team-gallery">
        <div class="basketball-team__container">
          <div class="basketball-team-body">
            <div class="basketball-team__header">
              <h3>Наша <span>команда</span></h3>
            </div>
            <div class="basketball-team__content">
              <div class="gallery__slider">
                <div class="slider-card__column">
                  <div class="card-photo">
                    <picture>
                      <source
                        srcset="img/slider/No-photo.webp"
                        type="image/webp" />
                      <img src="img/slider/No-photo.png" alt="" />
                    </picture>
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">14</div>
                    <div class="card-text__column">
                      <div class="card-text__info">
                        Shooting guard, 176 CM
                      </div>
                      <div class="card-text__name">Боглевский Ярослав</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">16</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Point Guard, 173 CM</div>
                      <div class="card-text__name">Парханюк Денис</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">18</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Center, 186 CM</div>
                      <div class="card-text__name">Дмитриев Никита</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">21</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Point Guard, 170 CM</div>
                      <div class="card-text__name">Дудников Семен</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">22</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Small forward, 177 CM</div>
                      <div class="card-text__name">Вьюнов Владимир</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">23</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Power forward, 180 CM</div>
                      <div class="card-text__name">Корнеев Ярослав</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">24</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Center, 178 CM</div>
                      <div class="card-text__name">Баутин Константин</div>
                    </div>
                  </div>
                </div>
                <div class="slider-card__column">
                  <div class="card-photo">
                    <img data-lazy="img/slider/No-photo.png" alt="" />
                  </div>
                  <div class="card-text__row">
                    <div class="card-text__number">25</div>
                    <div class="card-text__column">
                      <div class="card-text__info">Small forward, 175 CM</div>
                      <div class="card-text__name">Колесников Вячеслав</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- --------- -->
      <!-- Абонементы -->
      <section class="abonnement">
        <div class="abonnement__container">
          <div class="abonnement__body">
            <div class="abonnement__content">
              <div class="abonnement-title title">
                <h3>Абонементы</h3>
              </div>
              <div class="abonnement-row">
                <div class="abonnement-card">
                  <div class="abonnement-card__header">
                    <div class="abonnement-card__title">Начало пути</div>
                    <div class="abonnement-card__subtitle">
                      1 занятие - 350₽
                    </div>
                  </div>
                  <div class="abonnement-card__text">
                    Добавим спорт в свой досуг
                  </div>
                </div>
                <div class="abonnement-card">
                  <div class="abonnement-card__header">
                    <div class="abonnement-card__title">В команде</div>
                    <div class="abonnement-card__subtitle">
                      8 занятие - 2300₽
                    </div>
                  </div>
                  <div class="abonnement-card__text">Набираемся опыта!</div>
                </div>
                <div class="abonnement-card">
                  <div class="abonnement-card__header">
                    <div class="abonnement-card__title">Профи</div>
                    <div class="abonnement-card__subtitle">
                      Безлимит - 3500₽
                    </div>
                  </div>
                  <div class="abonnement-card__text">
                    Вы перешли на новый уровень!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- --------- -->
      <!-- Ответы на часто задаваемые вопросы -->
      <section class="questions">
        <div class="questions__container">
          <div class="questions__body">
            <div class="questions__content">
              <div class="questions-title title">
                <h3>Вопросы</h3>
              </div>
              <div class="questions-subtitle">
                Ответы на самые часто задаваемые вопросы
              </div>
              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Сколько стоят ваши занятия?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    На сегодняшний день можно приобрести месячный пакет - за
                    3500 рублей или разовое посещение - за 350 рублей
                  </p>
                </div>
              </div>

              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Как попасть в клуб?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    Чтобы стать частью нашей команды, необходимо записаться на
                    занятие через тренера, если возникнут вопросы то позвонить
                    нам. Далее нужно получить справку от врача-педиатра с
                    указанием группы здоровья и допуска к занятиям спортом.
                  </p>
                </div>
              </div>

              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Как часто проходят тренировки?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    Тренировки проходят 2-3 раза в неделю в зависимости от
                    возрастной группы.
                  </p>
                </div>
              </div>

              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Какие возрастные группы?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    Наша школа новая, поэтому мы постараемся создать группы,
                    которые позволят заниматься всем желающим. Словом,
                    возрастных ограничений нет.
                  </p>
                </div>
              </div>
              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Проходят ли у вас соревнования?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    В ближайшее время мы проведем первый турнир среди наших
                    воспитанников.
                  </p>
                </div>
              </div>
              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Мой ребенок носит очки, можно ли ему посещать
                    тренировки?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>Играть в баскетбол в очках можно!</p>
                </div>
              </div>
              <div class="faq">
                <button
                  class="accordion"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <span id="tab-title-dimensions_tab">Мой ребёнок никогда не занимался спортом и в целом он не
                    активный,получится ли у нас?</span>
                  <div class="circle-animation closed">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>
                <div class="panel">
                  <p>
                    Обязательно нужно прийти на бесплатную пробную тренировку.
                    Из опыта большинство детей потом остаются заниматься и
                    показывают развитие.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--PopUps  -->
      <div class="popup" id="popup__activity">
        <div class="popup__body">
          <div class="popup__content">
            <a href="##" class="popup__close">X</a>
            <div class="popup__title">Наше расписание:</div>
            <div class="popup__subtitle">
              <ul class="young-group group">
                <li>Младшая группа:</li>
                <li>Вторник 16:30-18:00</li>
                <li>Четверг 16:30-18:00</li>
                <li>Суббота 16:00-17:30</li>
              </ul>
              <ul class="senior-group group">
                <li>Старшая группа:</li>
                <li>Среда 17:00-18:30</li>
                <li>Пятница 17:00-18:30</li>
                <li>Суббота 16:00-17:30</li>
              </ul>
            </div>
            <a href="#popup__map" class="popup__link">
              <div class="button popup__btn">Далее</div>
            </a>
          </div>
        </div>
      </div>
      <div class="popup" id="popup__map">
        <div class="popup__body">
          <div class="popup__content popup__map">
            <a href="##" class="popup__close">X</a>
            <div class="popup__title">Мы на карте:</div>
            <div class="popup__map" id="map_container">
              <picture>
                <source
                  srcset="img/First-training/map.webp"
                  type="image/webp" />
                <img src="img/First-training/map.png" id="mapImg" alt="" />
              </picture>
              <iframe
                id="ymap_lazy"
                data-src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab5ed4dad3d52d367425f19ecdcb927c79eed6d8c3bf4b0b58a62d296c4e4beec&amp;source=constructor"
                width="90%"
                height="240"
                frameborder="0"></iframe>
            </div>
            <a href="#popup__conneсt" class="popup__link">
              <div class="button popup__btn">Далее</div>
            </a>
          </div>
        </div>
      </div>
      <div class="popup" id="popup__conneсt">
        <div class="popup__body">
          <div class="popup__content">
            <a href="##" class="popup__close">X</a>
            <div class="popup__title" align="center">
              Свяжитесь с тренером
            </div>
            <div class="popup__subtitle" align="center">
              Позвоните по номеру телефона +7 914 195-46-87 или напишите в
              WhatsApp
            </div>
            <a
              target="_blank"
              href="https://api.whatsapp.com/send?phone=79141954687&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C">
              <div class="button popup__btn">Написать</div>
            </a>
          </div>
        </div>
      </div>
      <!-- -------- -->
    </main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__body">
          <div class="footer__content">
            <div class="footer-row">
              <div class="footer-row__logo">
                <a href="./index.php"><img src="img/another/ball.svg" alt="" /></a>
              </div>
              <div class="footer-row__navigation">
                <nav>
                  <ul>
                    <a href="./index.php" class="footer__link">
                      <li>Главная</li>
                    </a>
                    <a href="./payment.html" class="footer__link">
                      <li>Оплата</li>
                    </a>
                    <a href="./contacts.html" class="footer__link">
                      <li>Контакты</li>
                    </a>
                    <a href="./training-schedule.html" class="footer__link">
                      <li>Расписание</li>
                    </a>
                    <a href="./Iam/Iam.html" class="footer__link">
                      <li>О разработчике</li>
                    </a>
                  </ul>
                </nav>
              </div>
              <div class="footer-row__social">
                <div class="contacts__row-block">
                  <div class="social-img__row">
                    <div class="social-img insta-img">
                      <a
                        href="https://instagram.com/amur_basketball?igshid=YmMyMTA2M2Y=">
                        <img src="img/another/instagtam.svg" alt="" />
                      </a>
                    </div>
                    <div class="social-img whatsapp-img">
                      <a
                        href="https://api.whatsapp.com/send?phone=79141954687&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C">
                        <img src="img/another/whatsapp.svg" alt="" />
                      </a>
                    </div>
                    <div class="social-img tiktok-img">
                      <a href="https://vt.tiktok.com/ZSduXySHK/">
                        <img src="img/another/tiktok.svg" alt="" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script
    src="https://code.jquery.com/jquery-1.11.0.min.js"
    integrity="sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="./files/slick/slick.min.js"></script>
  <script src="./js/app.min.js"></script>
</body>

</html>