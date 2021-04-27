 /* Una funcion es un procedimiento, un conjunto
 de sentencias que realizan o calculan un valor.*/

 /*En Javascript es de los conceptos mas importantes
 y versatiles de este lenguaje
 Siendo los tipos de funcion que podemos crear en Javascript
 los siguientes.
 -Function Declaration
 -Function Expression
 -IIFEE (Inmediately Invoked Function Expression)
 -Shorthand method definition
 -Arrow function
 -Generator function
 -Function constructor*/


 //------------------------------------------------------------------------------------------------------------------------------------------------------




 /*Function Declaration
 Este tipo de función se creará con la palabra reservada function, 
 seguido obligatoriamente por un nombre, que identificará a nuestra función, 
 una lista de parámetros entre paréntesis, y el símbolo de las llaves {}. 
 Qué será el que delimite el contenido de nuestro conjunto de sentencias.*/

 function hola(nombre){
    console.log(`Hola ${nombre}.`)
 }
hola('Alexis');  //=> Hola Victor


//------------------------------------------------------------------------------------------------------------------------------------------------------



/*Function expression
 La sintaxis para crear estas funciones es similar a la anterior. 
 La única diferencia es que la definición de nuestra nueva función no comienza por 
 instrucción function y el nombre de la función es opcional.*/

 const SUMADOS =function sumaDos(valor){
     return valor +2;
 }
 console.log(SUMADOS(5)) //=>7


 //------------------------------------------------------------------------------------------------------------------------------------------------------



 /*IIFE (Inmediately Invoked Function Expression)
 Normalmente cuando definimos una función es porque la vamos a llamar en varias ocasiones, 
 pero y sí sólo queremos llamar a la función en una sola ocasión y obtener un resultado. 
 Para ello podemos utilizar la funciones IIFE. Este tipo de funciones se ejecutan inmediatamente 
 y no son accesibles posteriormente.
 Para crear una función de este tipo deberemos crearla en un operador de agrupación ().
 Seguido de (), lo que posibilitará el interpretado directamente en el motor de JavaScript.*/

 ( function () {
    let nombre = 'Alexis'
    return `Hola ${nombre}`
})()


//------------------------------------------------------------------------------------------------------------------------------------------------------



/*Shorthand method definition
 Este forma de crear las funciones puede ser utilizado como método en la declaración de un objeto
 o en las clases de ES6.
 Para crear este tipo de función debemos asignar un nombre de función seguido de una lista de parámetros 
 entre paréntesis y los símbolos de llaves para delimitar el cuerpo de las instrucciones.*/

 const poblacion = {
    personas: [],
    add(...personas) {
      this.personas.push(...personas);
    },
    saluda(index) {
      return `Hola soy ${this.personas[index]}`;
    }
  };
  
  poblacion.add('Manuel', 'Alexis', 'Octavio');
  poblacion.saluda(1) // => 'Hola soy Jesus'

  //------------------------------------------------------------------------------------------------------------------------------------------------------



  /*Arrow function
  La forma de crear estas funciones es la siguiente: Primero definiremos la lista de parámetros, en caso de ser necesario, 
  entre paréntesis seguido del símbolo => y las {} para indicar las instrucciones que se van a realizar.
  Además de la sintaxis que es diferente a las anteriores este tipo de funciones tienen las siguientes características.
  +Las "arrow function" no crean su propio contexto al ejecutarse. Al contrario que las "function expression" o las "function declaration" 
  que crea su propio contexto.
  +Las "arrow function" son anónimas.
  +El objeto arguments no se encuentra en el contexto de la función.
  +Si al definir la función no utilizamos el símbolo de las llaves. La función devolverá como resultado de la función el resultado de 
  la ejecución de la instrucción que hayamos indicado*/
  
  const saluda2 = (nombre) => `Hola ${nombre}`;

  console.log(saluda2('Alexis'));  // => Hola Alexis

  //------------------------------------------------------------------------------------------------------------------------------------------------------



  /*Generator function
  Pero la característica más significativa de estas funciones es que nos permite parar o salir de la función en un punto dentro 
  del conjunto de instrucciones que forman nuestra función y retornar posteriormente la ejecución desde el punto en el que paramos anteriormente.
  La sintaxis de estas funciones es igual a las "function declaration" o "function expression". Sólo debemos utilizar el símbolo * al comienzo 
  de la definición de nuestra función.
  Otra diferencia de estas funciones es que siempre retorna un objeto con la siguiente estructura cada vez que invoquemos a la función next().*/
function *generatorFunction()
{ 
  console.log('Ejemplo generator Function.');
  // yield. Salimos de la función.
  // La propiedad value es igual a 'Un kit kat'
  yield 'Un kit kat';  

  console.log(' ¿ Continuamos ?');  
  // yield. Volvemos a salir de la función.
  // La propiedad value es igual a 'Fin del ejemplo'
  yield 'Fin del ejemplo';

}

const gen = generatorFunction();

console.log(gen.next().value);                    
console.log('La función se encuentra pausada');        
console.log(gen.next().value);
console.log(gen.next().value);

// El resultado de la ejecución sería el siguiente: 

// => Ejemplo generator Function.
// => Un kit kat
// => La función se encuentra pausada
// => ¿ Continuamos ?
// => Fin del ejemplo
// => undefined    

//------------------------------------------------------------------------------------------------------------------------------------------------------

/*Function constructor
Las funciones en Javascript, son funciones, y poseen el constructor Function. Por ello podremos crear una variable que invoque a un objeto Function. 
Cuando invoquemos a este objeto podremos enviar todos los argumentos que deseemos. Los primeros n argumentos serán los parámetros de nuestra función 
y el último argumento será el código de nuestra función. */

const sumaFunction = new Function('numero_1', 'numero_2', 
'return numero_1 + numero_2'
);

// Ejecutamos nuestra función.
console.log(sumaFunction(10, 15)) // => 25



//------------------------------------------------------------------------------------------------------------------------------------------------------




