<h1>Trabajo Práctico N°3</h1>
<h2>Persistencia & MVC</h2>

<h3>Fecha de entrega: Chivilcoy:14/05/20</h3>

<h4>Objetivo: Construir una aplicación web que utilice un servicio de persistencia externo (SGBD) ybuenas prácticas de código basadas en patrones conocidos, como MVC y OOP.
</h4>

<h5>Teórico</h5>

1. Extienda el sistema de gestión de turnos médicos para que los datos sean persistidos sobreuna base de datos MySQL usando PDO. La generación del número de turno debe hacerse vía motor de base de datos. ¿Qué cambios hubo que realizar para la generación del id?

    Para lograr la persistencia de los datos, se modificó el archivo <a href="\www\core\database\QueryBuilder.php">QueryBuilder</a> para obtener el último ID ingresado, esto es posible porque en la base de datos, el campo "id_turno" es un campo configurado como autoincrementado.

2. Modifique el sistema para permitir que las imágenes sean persistidas sobre la base de datos. El software debe permitir cargar imágenes de hasta 10 MB. Si la imagen pesa más, se le debe informar al usuario este inconveniente, y pre-cargando el formulario con los datos ingresados, solicitar una nueva imagen.

    Se modificaron las directivas "upload_max_filesize = 10M y post_max_size = 10M en el archivo php.ini. 
    En cuanto al guardado de imagen en la base de datos, primero se intento hacer con fopen pero al decodificar los datos se complicaba, entonces se opto por codifcarla en base64.

3. Implemente Modificación y Baja de los registros del sistema de turnos.
    
    En este caso en la baja se borra de la base de datos dejando registro en el logger sobre esto, particularmente, haría bajas lógicas indicando un estado en el turno.

4. Cada acción del ABM debe ser registrada usando el Logger del framework. Cada log debe ser de tipo INFO y almacenar fecha y hora, operación (ABM), y turno afectado (id). En los casos de modificación y baja, almacene el registro completo. ¿Considera esto util? ¿En que casos puede llegar a utilizarse?

    Se agregó en las acciones de ABM el llamado al logger, esto es una herramienta muy útil en entornos donde se efectuan modificaciones en la información y se quiere recuperar algun registro eliminado o simplemente para llevar un informe con las acciones realizadas. 