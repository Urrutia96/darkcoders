# DarkCoders

## Acerca de DarkCoders



## Instalación

Una vez clonado el repositorio, queda instalar los componentes de laravel ya que estos no son subidos porque pesan mucho, ejecuta el siguiente comando desde la carpeta del proyecto:

```
$ composer install
```

Eso te creara la carpeta vendor. Luego instalas los modulos de node ya que se estara trabando con VueJs.

```
$ npm install
```

Eso es todo en la instalacion, acontinuacion tienes que configurar tu entorno (.env), esto es porque por ser un archivo que tiene informacion privada no se sube al repositorio, entonse se tiene que hacer lo siguiente:

1. Copia el archivo .env.example y pegalo como .env
2. Tienes que generar una key para el proyecto con el siguiente comando:

```
$ php artisan key:generate
```

3. Configura los datos de conexion a la base de datos, serian los parametros que inician con DB_, eso dependera de como tienes configurado tu entorno local. 