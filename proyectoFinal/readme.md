# PHP básico

Cualquier falla con el archivo comprimido, puede revisar el código en mi repositorio que lo subí.

Repositorio en [Github](https://github.com/jesus9314/tareas_php_basic/tree/master/proyectoFinal)

## Proyecto:

1. Formulario de login, validar contra tabla usuarios.
   2. Mantenimiento de tabla categorías agregar, editar, desactivar(no borrar).
      3. Mantenimiento de tabla productos (agregar, editar, desactivar(no borrar).

### Tabla: usuarios

`id: entero, autoincrementable, pk`
`usuario: nombre de usuario, varchar(30)`
`clave: contraseña, varchar(50)`

### Tabla: categorias

`id: entero, autoincrementable, pk`
`nombre: nombre de categoria, varchar(50)`
`estado: activo/inactivo  1/0`

### Tabla: productos

`id: entero, autoincrementable, pk`
`nombre: nombre producto, varchar(50)`
`idcategoria: codigo de categoria`
`precio: decimal(18,2)`
`stock: entero`