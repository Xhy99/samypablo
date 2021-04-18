

var yournumber = prompt("Introduce el numerito")




var seednumber = Math.random();

document.write('Crash at: '+ seednumber);


if ( seednumber <= yournumber) {
  document.write('  Ou No!, You Lose');
}
else {
  document.write('  Oh Yeah!, You Won');
}
