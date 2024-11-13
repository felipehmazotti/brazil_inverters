// Script para interações futuras (galeria, busca, etc.)
document.addEventListener('DOMContentLoaded', function() {
    console.log("Plataforma carregada com sucesso!");
});


document.getElementById('search-button').addEventListener('click', function() {
    var searchTerm = document.getElementById('search-bar').value;
    if (searchTerm) {
        alert('Você pesquisou por: ' + searchTerm);
    } else {
        alert('Por favor, insira um termo de pesquisa.');
    }
});

// 

document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector("#seuCarouselID"); // Substitua pelo ID do seu carousel
    const gameCards = document.querySelectorAll(".game-card"); // Seleciona todos os cards dos jogos

    // Função que é executada quando o slide do carousel muda
    function updateCarousel() {
        const activeSlide = carousel.querySelector(".active"); // Slide ativo no carousel
        const gameId = activeSlide.getAttribute("data-game-id"); // Pega o ID do jogo em exibição

        // Adiciona ou remove a classe bw-card dos cards de jogo
        gameCards.forEach(card => {
            if (card.getAttribute("data-game-id") === gameId) {
                card.classList.add("bw-card");
            } else {
                card.classList.remove("bw-card");
            }
        });
    }

    // Escuta o evento de mudança de slide (usando o evento correto do seu framework de carousel)
    carousel.addEventListener("slide.bs.carousel", updateCarousel);

    // Executa a função pela primeira vez para aplicar o efeito ao card inicial
    updateCarousel();
});

const next = document.querySelector('#next')
const prev = document.querySelector('#prev')

function handleScrollNext (direction) {
    const cards = document.querySelector('.con-cards')
    cards.scrollLeft = cards.scrollLeft += window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
}
function handleScrollPrev (direction) {
    const cards = document.querySelector('.con-cards')
    cards.scrollLeft = cards.scrollLeft -= window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
}

next.addEventListener('click', handleScrollNext)
prev.addEventListener('click', handleScrollPrev)


$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: true
  });
  $(document).ready(function () {
    $(".custom-carousel .item").click(function () {
      $(".custom-carousel .item").not($(this)).removeClass("active");
      $(this).toggleClass("active");
    });
  });
  
  const slider = document.querySelector('.slider');

  function activate(e) {
    const items = document.querySelectorAll('.item');
    e.target.matches('.next') && slider.append(items[0])
    e.target.matches('.prev') && slider.prepend(items[items.length-1]);
  }
  

  $(function () {
    $(".menu-link").click(function () {
     $(".menu-link").removeClass("is-active");
     $(this).addClass("is-active");
    });
   });
   
   $(function () {
    $(".main-header-link").click(function () {
     $(".main-header-link").removeClass("is-active");
     $(this).addClass("is-active");
    });
   });
   
   const dropdowns = document.querySelectorAll(".dropdown");
   dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", (e) => {
     e.stopPropagation();
     dropdowns.forEach((c) => c.classList.remove("is-active"));
     dropdown.classList.add("is-active");
    });
   });
   
   $(".search-bar input")
    .focus(function () {
     $(".header").addClass("wide");
    })
    .blur(function () {
     $(".header").removeClass("wide");
    });
   
   $(document).click(function (e) {
    var container = $(".status-button");
    var dd = $(".dropdown");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
     dd.removeClass("is-active");
    }
   });
   
   $(function () {
    $(".dropdown").on("click", function (e) {
     $(".content-wrapper").addClass("overlay");
     e.stopPropagation();
    });
    $(document).on("click", function (e) {
     if ($(e.target).is(".dropdown") === false) {
      $(".content-wrapper").removeClass("overlay");
     }
    });
   });
   
   $(function () {
    $(".status-button:not(.open)").on("click", function (e) {
     $(".overlay-app").addClass("is-active");
    });
    $(".pop-up .close").click(function () {
     $(".overlay-app").removeClass("is-active");
    });
   });
   
   $(".status-button:not(.open)").click(function () {
    $(".pop-up").addClass("visible");
   });
   
   $(".pop-up .close").click(function () {
    $(".pop-up").removeClass("visible");
   });
   
   const toggleButton = document.querySelector('.dark-light');
   
   toggleButton.addEventListener('click', () => {
     document.body.classList.toggle('light-mode');
   });