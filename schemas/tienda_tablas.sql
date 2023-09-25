create table BDS_login(
    correo varchar2(30) not null,
    contra varchar2(15) not null
);

alter table BDS_login add constraint BDS_login_pk primary key (correo);
------
create table BDS_cliente(
    cod_usuario number,
    correo varchar2(30) not null,
    nombre_cliente varchar2(30) not null,
    apellido_cliente varchar2(30) not null,
    id_usuario number
);

alter table BDS_cliente add constraint BDS_cliente_pk primary key (cod_usuario);
alter table BDS_cliente add constraint BDS_cliente_usuario_fk foreign key(id_usuario) references BDS_tipo_usuario(id_usuario);
--
create table BDS_inventario(
    cod_inventario number,
    cantidad number,
    cod_insumo number
);

alter table BDS_inventario add constraint BDS_inventario_pk primary key (cod_inventario);
alter table BDS_inventario add constraint BDS_inventario_insumo_pk foreign key(cod_insumo) references BDS_insumo(cod_insumo);
--
create table BDS_insumo(
    cod_insumo number,
    nombre_insumo varchar2(30) not null,
    cantidad_insumo number
);

alter table BDS_insumo add constraint BDS_insumo_pk primary key (cod_insumo);
--
create table BDS_categoria_producto(
    cod_categoria number,
    nombre_categoria varchar2(30) not null
);

alter table BDS_categoria_producto add constraint BDS_categoria_producto_pk primary key (cod_categoria);
--

create table BDS_productos(
    cod_producto number,
    nombre_producto varchar2(30) not null,
    cantidad_disponible number,
    valor_producto number,
    cod_categoria number
);

alter table BDS_productos add constraint BDS_productos_pk primary key(cod_producto);
alter table BDS_productos add constraint BDS_productos_categoria_fk foreign key(cod_categoria) references BDS_categoria_producto(cod_categoria);    -----
--

create table BDS_detalle_inventario(
    cod_detalle_inventario number,
    cod_inventario number,
    cod_insumo number
);

alter table BDS_detalle_inventario add constraint BDS_detalle_inventario_pk primary key(cod_detalle_inventario);
alter table BDS_detalle_inventario add constraint BDS_detalle_cod_inventario_fk foreign key(cod_inventario) references BDS_inventario(cod_inventario);
alter table BDS_detalle_inventario add constraint BDS_detalle_cod_insumo_fk foreign key(cod_detalle_inventario) references BDS_productos(cod_insumo);
--
create table BDS_nro_direccion_sucursal(
    nro_dir number
);

alter table BDS_nro_direccion_sucursal add constraint BDS_nro_direccion_sucursal_pk primary key(nro_dir);
--

create table BDS_calle_direccion_sucursal(
    cod_calle_sucursal number,
    nombre_calle varchar2(30) not null,
    nro_dir number
);

alter table BDS_calle_direccion_sucursal add constraint BDS_calle_direccion_sucursal primary key(cod_calle_sucursal);
alter table BDS_calle_direccion_sucursal add constraint BDS_calle_direccion_nro_fk foreign key (nro_dir) references BDS_nro_direccion_sucursal(nro_dir);
--

create table BDS_ciudad_sucursal(
    cod_ciudad_sucursal number,
    nombre_ciudad varchar2(30) not null,
    cod_calle_sucursal number
);

alter table BDS_ciudad_sucursal add constraint BDS_ciudad_sucursal_pk primary key(cod_ciudad_sucursal);
alter table BDS_ciudad_sucursal add constraint BDS_ciudad_sucursal_calle_fk foreign key(cod_calle_sucursal) references BDS_calle_direccion_sucursal(cod_calle_sucursal);
--

create table BDS_sucursal(
    cod_sucursal number,
    nombre_sucursal varchar2(30) not null,
    cod_ciudad_sucursal number,
    calle_sucursal varchar2(30) not null,
    nro_direccion_sucursal number
);

alter table BDS_sucursal add constraint BDS_sucursal_pk primary key(cod_sucursal);
alter table BDS_sucursal add constraint BDS_sucursal_ciudad_fk foreign key(cod_ciudad_sucursal) references BDS_ciudad_sucursal(cod_ciudad_sucursal);
--

create table BDS_detalle_sucursal_producto(
    cod_detalle_sucursal_producto number,
    cod_producto number,
    cod_sucursal number
);

alter table BDS_detalle_sucursal_producto add constraint BDS_detalle_sucursal_producto_pk primary key(cod_detalle_sucursal_producto);
alter table BDS_detalle_sucursal_producto add constraint BDS_detalle_sucursal_cod_producto_fk foreign key(cod_producto) references BDS_productos(cod_producto);
alter table BDS_detalle_sucursal_producto add constraint BDS_detalle_sucursal_cod_sucursal_fk foreign key(cod_sucursal) references BDS_sucursal(cod_sucursal);
------------------
CREATE TABLE "ADMIN"."BDS_HORARIO"( 	
    "COD_HORARIO" NUMBER, 
	"NOMBRE_HORARIO" VARCHAR2(30 BYTE), 
	"COD_USUARIO" NUMBER, 
	"FECHA" DATE
); 
	 CONSTRAINT "BDS_HORARIO_PK" PRIMARY KEY ("COD_HORARIO")
  
	 CONSTRAINT "BDS_HORARIO_USUARIO_PK" FOREIGN KEY ("COD_USUARIO")
	  REFERENCES "ADMIN"."BDS_USUARIO" ("COD_USUARIO") ENABLE
--------------------
CREATE TABLE "ADMIN"."BDS_PROVEEDOR" 
   (	"COD_PROVEEDOR" NUMBER, 
	"NOMBRE_PROVEEDOR" VARCHAR2(30 BYTE), 
	"APELLIDO_PROVEEDOR" VARCHAR2(30 BYTE), 
	"COD_INSUMO" NUMBER, 
	 CONSTRAINT "BDS_PROVEEDOR_PK" PRIMARY KEY ("COD_PROVEEDOR")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE, 
	 CONSTRAINT "BDS_PROVEEDOR_INSUMO_PK" FOREIGN KEY ("COD_INSUMO")
	  REFERENCES "ADMIN"."BDS_INSUMO" ("COD_INSUMO"
-----------------------------
CREATE TABLE "ADMIN"."BDS_RECLAMO" 
   (	"COD_RECLAMO" NUMBER, 
	"DETALLE_RECLAMO" VARCHAR2(400 BYTE), 
	 CONSTRAINT "BDS_RECLAMO_PK" PRIMARY KEY ("COD_RECLAMO")
------------------------------
CREATE TABLE "ADMIN"."BDS_ROLES_TRABAJO" 
   (	"COD_ROL" NUMBER NOT NULL ENABLE, 
	"NOMBRE_ROL" VARCHAR2(30 BYTE) NOT NULL ENABLE, 
	 CONSTRAINT "BDS_ROLES_TRABAJO_PK" PRIMARY KEY ("COD_ROL")

--------------------------------
create table BDS_buy(
    cod_buy number,
    cod_producto number,
    cantidad_comprada number
);
alter table BDS_buy add constraint BDS_buy_pk primary key(cod_buy);
alter table BDS_buy add constraint BDS_buy_producto_fk foreign key(cod_producto) references BDS_productos(cod_producto);
--------------------------------------------------
-- Mantenedores
--PA 
create or replace procedure BDS_crud_login(
	opcion number,
	correo_p varchar2 default null,
    contra_p varchar2 default null
)
is 
begin 
	lock table BDS_login in row exclusive mode;
    insert into BDS_login(correo, contra)
		values(correo_p, contra_p);
	commit;
	exception
		when program_error then
		raise_application_error(-6501,'pl/sql tiene un error interno');
	rollback;
end;
--
create or replace procedure BDS_crud_cliente(
	opcion number,
	cod_usuario_p number,
	nombre_cliente_p Varchar2 default null,
	apellido_cliente_p Varchar2 default null,
    correo_p varchar2 default null
)
is 
begin 
	lock table BDS_cliente in row exclusive mode;
	if (opcion = 1) then
    	insert into BDS_cliente(cod_usuario, nombre_cliente, apellido_cliente,correo)
		values(cod_usuario_p,nombre_cliente_p,apellido_cliente_p);
    end if;
    if (opcion = 2) then
	update BDS_cliente set 
		nombre_empleado = nombre_empleado_p,
		apellido_empleado = apellido_empleado_p,
		email_empleado = email_empleado_p,
		rut_empleado = rut_empleado_p
		where cod_empleado = cod_empleado;
	end if;
	if (opcion = 3) then
		delete from sief_empleado where(cod_empleado = cod_empleado_p);
	end if;
	commit;
	exception
		when program_error then
		raise_application_error(-6501,'pl/sql tiene un error interno');
	rollback;
end;
-- Cursor
create or replace procedure BDS_cursor_tipo_usuario
is
	cursor c_cuenta is select * from BDS_login;
begin
	lock table BDS_login in row exclusive mode;
	for c_fila in c_cuenta loop
		dbms_output.put_line('correo electronico:' || c_fila.correo|| ' ' || 'contraseña:' || ' ' || c_fila.contra );
	end loop;
	commit;
	exception 
	when INVALID_CURSOR then 
	raise_application_error(-1001,'la operacion de este cursor es invalida');
	rollback;
end;