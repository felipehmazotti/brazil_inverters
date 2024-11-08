var games = document.querySelectorAll('.item');

function randomAmount(min,max) {
  return Math.floor(Math.random() * (max - min) + min);
}

games.forEach(g => {
  g.addEventListener('click', e => {
    loadIn(g);    
  });
});

function loadIn(item) {
  if(item.classList.contains('loading')) {
    return;
  }
  item.classList.add('loading');
  var percent = item.querySelector('.item-percent');
  item.setAttribute('style', '--loaded: 0');
    let percentAmount = 0;
    var loader = setInterval(() => {
      percentAmount += randomAmount(1,5);
      if(percentAmount > 100) {
        percentAmount = 100;
      }
      item.setAttribute('style', `--loaded: ${percentAmount}%`);
      percent.textContent = percentAmount + '%';
      if(percentAmount == 100) return clearInterval(loader);
    }, 500);
}