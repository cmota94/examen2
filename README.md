# examen2

Preguntas:

¿Para qué sirven los arreglos $_GET, $_POST, $_SESSION y $_FILES?
	GET: sirve para poder traer datos desde la base de datos, tambien se pueden mandar con este metodo pero los datos mandados se verian en la barra de direccion del navegador
	POST: sirve para mandar datos al servidor
	SESSION: Es un arreglo en el que podemos almacenar datos para que sean utilizados en cualquier parte del archivo php
	FILES: sirve para poder cargar o almacenar archivos al servidor, mediante el metodo POSt

¿Cuál es la diferencia entre validar y sanitizar?
	Validar: que los datos que se mandan o reciben deben de cumplir con un formato en especifico para poder ser almacenados o procesados.
	Sanitizar: podemos especificar reglas internas para los datos que recibimos, por ejemplo interpretar de una manera las "ñ", los datos se reciben pero podemos almacenarlos de difernete manera, con otra
					codificacion por ejemplo.

¿Para qué sirve una sesión?
	Para poder validar el acceso de un usuario, que exista en nuestra base de datos y de ser el caso le permita que se registre; si ya se encuentra registrado podemos traer los datos y mostrarle el contenido
	respectivo a su usuario

¿Qué es JavaScript?
	Es un lenguaje de programacion interpretado que va enfocado al desarrollo web, es orientado a objetos y nos permite trabajar con elementos o etiquetas html.

¿Qué es jQuery y Ajax?
	JQUERY:	Es una libreria de Javascript que nos permite utilizar funciones, ya escritas, de una manera mucho más simple, ya que nos permite manipular los elementos del DOM con mucha mas facilidad.
	AJAX: Es una tecnica de desarrollo que nos permite mostrar contenido o hacer peticiones al servidor sin tener que recargar la pagina entera, solo la seccion que se desea mostrar.