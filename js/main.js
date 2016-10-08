jQuery(document).ready(function() {//ждем загрузки все страницы
// прилипающее меню
    var avatarElem = document.getElementById('top-navbar');//id элемента, который будем прилеплять к шапке
    var nameSitiElem = document.getElementById('menu-top-name-siti');//id названия сайта в верхнем меню
    var searchString = document.getElementById('search_string');//id названия сайта в верхнем меню

    var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;//определения нижнего пикселя элемента

    window.onscroll = function() {//функция скроллинга
      if (avatarElem.classList.contains('navbar-fixed-top') && window.pageYOffset < avatarSourceBottom) {//при прокрутке вниз
        avatarElem.classList.remove('navbar-fixed-top');//убрать класс
        nameSitiElem.classList.add('dn');//добавить класс ни прокрутке вниз
        searchString.classList.remove('dn');//убрать класс ни прокрутке вниз
      } else if (window.pageYOffset > avatarSourceBottom) {//при обратной прокрутке
        avatarElem.classList.add('navbar-fixed-top');//добавить класс
        nameSitiElem.classList.remove('dn');//убрать класс ни прокрутке вниз
        searchString.classList.add('dn');//добавить класс ни прокрутке вниз
      }
    };

});//конец ready