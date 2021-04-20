

var yournumber;
do{
  yournumber = prompt("Introduce el numerito"||typeof yournumber=="string");
  if(yournumber<=0|| yournumber==null){
    yournumber = prompt("El numero " +yournumber+ " no es válido introduzca otro");
  }
  else if(typeof yournumber == "string"){
    yournumber = prompt("La palabra " + yournumber+ " no es válida introduzca un numero");
  }
}while(yournumber==null|| yournumber<=0);




var seednumber = Math.random();

document.write('Crash at: '+ seednumber);


if ( seednumber <= yournumber) {
  document.write('  Ou No!, You Lose');
}
else {
  document.write('  Oh Yeah!, You Won');
}
