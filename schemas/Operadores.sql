CREATE OR REPLACE PROCEDURE BDS_CRUD_I_login(
    correo_p varchar2 DEFAULT null,
    contra_p varchar2 DEFAULT null
)
IS
BEGIN
    lock table BDS_login in row exclusive mode;
    INSERT INTO BDS_login(correo, contra)
        VALUES(correo_p, contra_p);
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;

--------------------------------------------------------------

CREATE OR REPLACE PROCEDURE BDS_CURSOR_login_Tipo_Usuario
IS  
    cursor c_cuenta is select * from BDS_login;
BEGIN
    lock table BDS_login in row exclusive mode;
    for c_fila in c_cuenta loop
        dbms_output.put_line('correo:'||  c_fila.correo|| ' '||  'contraseña:'||  ' ' || c_fila.contra );
    end loop;
    commit;
    exception 

    when INVALID_CURSOR then 
    raise_application_error(-1001,'la operacion de este cursor es invalida');
    rollback;
end;

------------------------------------------------------
CREATE OR REPLACE FUNCTION BDS_FUN_AUTO_ID_P
RETURN NUMBER
IS
	ID_USUARIO_F NUMBER := 0;
BEGIN
	SELECT MAX(id_usuario)+1 INTO id_usuario_F
	FROM BDS_tipo_usuario;
	IF ID_usuario_F IS NULL THEN
		id_usuario_F := 1;
	END IF;
	RETURN id_usuario_F;
END;

--------------------------------------------------------

create or replace NONEDITIONABLE PROCEDURE BDS_CURSOR_productos
IS  
    cursor c_cuenta is select * from BDS_productos;
BEGIN
    lock table BDS_login in row exclusive mode;
    for c_fila in c_cuenta loop
        dbms_output.put_line( 'codigo_producto ='||'c_fila.cod_producto'||' '||'nombre_producto ='||' '||'c_fila.nombre_producto' );
    end loop;
    commit;
    exception 

    when INVALID_CURSOR then 
    raise_application_error(-1001,'la operacion de este cursor es invalida');
    rollback;
end;

-----------------------------------------------------------

CREATE OR REPLACE FUNCTION BDS_FUN_AUTO_cod_P
RETURN NUMBER
IS
	cod_USUARIO_F NUMBER := 0;
BEGIN
	SELECT MAX(cod_usuario)+1 INTO cod_usuario_F
	FROM BDS_cliente;
	IF cod_usuario_F IS NULL THEN
		cod_usuario_F := 1;
	END IF;
	RETURN cod_usuario_F;
END;

-------------------------------------------------------------

CREATE OR REPLACE PROCEDURE BDS_CRUD_I_cliente(
    nombre_cliente_p varchar2 DEFAULT null,
    apellido_cliente_p varchar2 DEFAULT null
)
IS
BEGIN
    lock table BDS_cliente in row exclusive mode;
    INSERT INTO BDS_cliente(nombre_cliente, apellido_cliente)
        VALUES(nombre_cliente_p, apellido_cliente_p);
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;

--------------------------------------------------------------

CREATE OR REPLACE FUNCTION BDS_FUN_AUTO_cod_b_P
RETURN NUMBER
IS
	cod_boleta_F NUMBER := 0;
BEGIN
	SELECT MAX(cod_boleta)+1 INTO cod_boleta_F
	FROM BDS_boleta;
	IF cod_boleta_F IS NULL THEN
		cod_boleta_F := 1;
	END IF;
	RETURN cod_boleta_F;
END;

-------------------------------------------------------------------------

CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_insumo(
	opcion number,
	cod_insumo_p NUMBER,
    nombre_insumo_P VARCHAR2 DEFAULT NULL,
	cantidad_insumo_p NUMBER
)
IS
BEGIN
    lock table BDS_insumo in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_insumo(cod_insumo, nombre_insumo, cantidad_insumo)
			VALUES(cod_insumo_p, nombre_insumo_p, cantidad_insumo_p);
		mensaje := 'Registro insertado correctamente';
		commit;
	

	ELSIF OPCION = 2 THEN
		UPDATE BDS_insumo SET
			nombre_insumo=nombre_insumo_P,
            cantidad_insumo=cantidad_insumo_p
			WHERE(cod_insumo=COD_insumo_P);
		mensaje := 'Registro actualizado correctamente';
		commit;

	ELSIF OPCION = 3 THEN
		DELETE FROM BDS_insumo WHERE(cod_insumo = COD_insumo_P);
		mensaje := 'Registro borrado correctamente':
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
-----------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_categoria_producto(
	opcion number,
	cod_categoria_p NUMBER,
    nombre_categoria_p VARCHAR2 DEFAULT NULL

)
IS
BEGIN
    lock table BDS_categoria_producto in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_categoria_producto(cod_categoria, nombre_categoria)
			VALUES(cod_categoria_p, nombre_categoria_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_categoria_producto SET
            nombre_categoria=nombre_categoria_p
			WHERE(cod_categoria=COD_categoria_P);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_categoria_producto WHERE(cod_categoria = COD_categoria_P);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
---------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_productos(
	opcion number,
	cod_producto_p number,
    nombre_producto_p varchar2(30) default null,
    cantidad_disponible_p number,
    valor_producto_p number
)
IS
BEGIN
    lock table BDS_productos in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_productos(cod_producto, nombre_producto, cantidad_disponible, valor_producto)
			VALUES(cod_producto_p, nombre_producto_p, cantidad_disponible_p, valor_producto_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_productos SET
            nombre_producto=nombre_producto_p,
            cantidad_disponible=cantidad_disponible_p,
            valor_producto=valor_producto_p
			WHERE(cod_producto=cod_producto_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_productos WHERE(cod_producto = cod_producto_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
---------------------------------------------------------------------------------------

CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_carrito_compra(
	opcion number,
	cod_carrito_p number,
    stock_producto_p number,
    precio_producto_p number
)
IS
BEGIN
    lock table BDS_carrito_compra in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_carrito_compra(cod_carrito, stock_producto,precio_producto)
			VALUES(cod_carrito_p, stock_producto_p,precio_producto_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_carrito_compra SET
            stock_producto=stock_producto_p,
            precio_producto=precio_producto_p
			WHERE(cod_carrito=cod_carrito_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_carrito_compra WHERE(cod_carrito = cod_carrito_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
---------------------------------------------------------
CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_nro(
	opcion number,
	nro_dir_p number
)
IS
BEGIN
    lock table BDS_nro_direccion_sucursal in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_nro_direccion_sucursal(nro_dir)
			VALUES(nro_dir_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_nro_direccion_sucursal SET
            nro_dir=nro_dir_p
			WHERE(nro_dir=nro_dir_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_nro_direccion_sucursal WHERE(nro_dir = nro_dir_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
-----------------------------------------------------------------------

CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_calle(
	opcion number,
	cod_calle_sucursal_p number,
    nombre_calle_p varchar2 default  null
)
IS
BEGIN
    lock table BDS_calle_direccion_sucursal in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_calle_direccion_sucursal(cod_calle_sucursal, nombre_calle)
			VALUES(cod_calle_sucursal_p, nombre_calle_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_calle_direccion_sucursal SET
            nombre_calle=nombre_calle_p
			WHERE(cod_calle_sucursal=cod_calle_sucursal_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_calle_direccion_sucursal WHERE(cod_calle_sucursal=cod_calle_sucursal_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
-----------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_ciudad(
	opcion number,
	cod_ciudad_sucursal_p number,
    nombre_ciudad_p varchar2(30) default null
)
IS
BEGIN
    lock table BDS_ciudad_sucursal in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_ciudad_sucursal(cod_ciudad_sucursal, nombre_ciudad)
			VALUES(cod_ciudad_sucursal_p, nombre_ciudad_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_ciudad_sucursal SET
            nombre_ciudad=nombre_ciudad_p
			WHERE(cod_ciudad_sucursal=cod_calle_sucursal_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_ciudad_sucursal WHERE(cod_ciudad_sucursal=cod_calle_sucursal_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
-----------------------------------------------------
CREATE OR REPLACE PROCEDURE BDSCRUD_IUE_sucursal(
	opcion number,
	cod_sucursal number,
    nombre_sucursal varchar2 default null,
    cod_ciudad_sucursal number,
    calle_sucursal varchar2 default null,
    nro_direccion_sucursal number
)
IS
BEGIN
    lock table BDS_sucursal in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_sucursal(cod_sucursal, nombre_sucursal, cod_ciudad_sucursal, calle_sucursal, nro_direccion_sucursal)
			VALUES(cod_sucursal_p, nombre_sucursal_p, cod_ciudad_sucursal_p, calle_sucursal_p, nro_direccion_sucursal_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_sucursal SET
            nombre_sucursal=nombre_sucursal_p,
            cod_ciudad_sucursal=cod_ciudad_sucursal_p,
            calle_sucursal=calle_sucursal_p,
            nro_direccion_sucursal=nro_direccion_sucursal_p
			WHERE(cod_sucursal=cod_sucursal_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_sucursal WHERE(cod_ciudad_sucursal=cod_calle_sucursal_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
--------------------------------------------------------------
CREATE OR REPLACE PROCEDURE BDS_CRUD_IUE_sucursal_producto(
	opcion number,
	cod_detalle_sucursal_producto_p number,
    cod_producto_p number,
    cod_sucursal_p number
)
IS
BEGIN
    lock table BDS_detalle_sucursal_producto in row exclusive mode;
	IF(OPCION = 1)THEN
		INSERT INTO BDS_detalle_sucursal_producto(cod_detalle_sucursal_producto, cod_producto, cod_sucursal)
			VALUES(cod_detalle_sucursal_producto_p, cod_producto_p, cod_sucursal_p);
	END IF;

	IF(OPCION = 2)THEN
		UPDATE BDS_detalle_sucursal_producto SET
            cod_producto=cod_producto_p,
            cod_sucursal=cod_sucursal_p
			WHERE(cod_detalle_sucursal_producto=cod_detalle_sucursal_producto_p);
	END IF;

	IF(OPCION = 3)THEN
		DELETE FROM BDS_detalle_sucursal_producto WHERE(cod_detalle_sucursal_producto=cod_detalle_sucursal_producto_p);
	END IF;
    commit;
    exception
        when program_error then
        raise_application_error(-6501,'pl/sql tiene un error interno');
    rollback;
END;
-------------------

create or replace trigger BDS_pk_login
before insert on BDS_login  
for each row
begin 
	select max(correo)+1 into :new.correo
	from BDS_login;
	if :new.correo is null then
		:new.correo := 1;
	end if;
end BDS_pk_login;
---------------------

create or replace trigger BDS_pk_inventario
before insert on BDS_inventario  
for each row
begin 
	select max(cod_inventario)+1 into :new.cod_inventario
	from BDS_inventario;
	if :new.cod_inventario is null then
		:new.cod_inventario := 1;
	end if;
end BDS_pk_inventario;

-----------------------

create or replace trigger BDS_pk_productos
before insert on BDS_productos  
for each row
begin 
	select max(cod_producto)+1 into :new.cod_producto
	from BDS_productos;
	if :new.cod_producto is null then
		:new.cod_producto := 1;
	end if;
end BDS_pk_productos;
-----------------------------------------------

create or replace trigger BDS_pk_categoria
before insert on BDS_categoria_producto  
for each row
begin 
	select max(cod_categoria)+1 into :new.cod_categoria
	from BDS_categoria_producto;
	if :new.cod_categoria is null then
		:new.cod_categoria := 1;
	end if;
end BDS_pk_categoria;
-------------------------------------------------
create sequence BDS_sec_insumo
    start with 1
	increment by 1
	maxvalue 99999
	minvalue 1;