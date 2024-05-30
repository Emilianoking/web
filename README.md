Esta página web es una de las mejores que he creado hasta ahora. En ella, he implementado un sistema de inicio de sesión que está respaldado por una base de datos PostgreSQL en la nube utilizando CockroachDB. La aplicación está desarrollada en PHP para el backend y CSS para el diseño y la presentación visual.

Al registrarte, puedes acceder a dos tipos de información mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar). La aplicación distingue entre dos roles: administrador y cliente.

Los clientes pueden visualizar las motos en stock, pero no tienen permisos para modificar esta información. En cambio, los administradores tienen la capacidad de modificar los datos de las motos en stock. Esto se logra mediante la asignación de roles, asegurando así que solo los usuarios con los permisos adecuados puedan realizar cambios críticos en la base de datos.

A continuación, se presenta el código que implementa esta funcionalidad, desarrollado con PHP y estilizado con CSS, utilizando CockroachDB para gestionar de manera eficiente las operaciones y roles de usuario.
