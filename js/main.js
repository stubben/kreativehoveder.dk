let getRan = function () {
  let x = Math.floor(Math.random() * 360);
  return x;
};
window.setInterval(function(){
  let hdElement = document.querySelector('.hd');
  hdElement.style.backgroundColor = '#' + Math.floor(Math.random()*16777216).toString(16);
	hdElement.style.backgroundSize = getRan() + 'px, ' + getRan() + 'px, ' + getRan() + 'px, ' + getRan() + 'px';
}, 10000);