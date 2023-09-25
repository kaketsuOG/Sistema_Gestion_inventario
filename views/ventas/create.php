<form action="routes/buy.php" method="post" onsubmit="return validar();">
    <input type="hidden" name="operation" value="insert">
    <div class="row p-4">
        <div class="form-group col-md-9">
            <div class="card">
                <div class="card-header">
                    <h6>Detalle de Venta</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th width="10%">Precio</th>
                                <th width="10%">Cantidad</th>
                                <th width="10%">Subtotal</th>
                                <th width="5%">Quitar</th>
                            </tr>
                        </thead>
                        <tbody id="detalle">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="form-group col-md-3">
            <input class="form-control form-control-lg mb-4" id="searchProducto" placeholder="Ingrese Código De Producto..." style="text-align:right;">
            <div class="card">
                <div class="card-header">
                    <h6>Totales</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm" style="text-align: right;">
                        <thead>
                            <tr>
                                <th width="40%">NETO</th>
                                <th id="textNeto">$ 0</th>
                            </tr>
                            <tr>
                                <th width="40%">IVA</th>
                                <th id="textIva">$ 0</th>
                            </tr>
                            <tr>
                                <th width="40%">TOTAL</th>
                                <th id="textTotal">$ 0</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <input type="hidden" id="total" name="total" value="0">
                        <button type="submit" class="btn btn-success btn-lg">Guardar Venta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    window.onload = function() {

        $(document).ready(function() {
            $(window).keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
        
        $("#searchProducto").keydown(function(event){
            if(event.keyCode == 13) {
                buscar();
                event.preventDefault();
                return false;
            }
        });

        function buscar() {
            const codigo = $("#searchProducto").val();
            $.get("routes/buy.php?operation=search",{codigo:codigo},function(data) {

                if (!data) {
                    alert("El Producto no Existe.");
                } else {

                    const codigo_producto = data.COD_PRODUCTO;
                    const valor_producto = data.VALOR_PRODUCTO;
                    const nombre_producto = data.NOMBRE_PRODUCTO;

                    if ($("#detalle-"+codigo_producto).length == 0) {
                        const tr = `
                            <tr id="detalle-${codigo_producto}">
                                <td>${nombre_producto}</td>
                                <td id="valor-${codigo_producto}">${valor_producto}</td>
                                <td><input type="number" class="form-control" id="cant-${codigo_producto}" name="cant-${codigo_producto}" value="1" onkeyup="cantidad(${codigo_producto});" min="1" required></td>
                                <td id="subtotal-${codigo_producto}">100</td>
                                <td><button type="button" class="btn btn-danger btn-sm btnQuitar" id="${codigo_producto}">Quitar</button></td>
                                <input type="hidden" class="det" name="detalle[]" value="${codigo_producto}">
                                <input type="hidden" name="val-${codigo_producto}" id="val-${codigo_producto}" value="${valor_producto}">
                                <input type="hidden" name="subt-${codigo_producto}" id="subt-${codigo_producto}" value="${valor_producto}">
                            </tr>
                        `;
                        $("#detalle").append(tr).ready(function() {
                            cantidad(codigo);
                            $(".btnQuitar").click(function() {
                                const id= this.id; 
                                $("#detalle-"+id).remove();
                                total();
                            });
                        });
                    } else {
                        const cantidad = parseInt($("#cant-"+codigo).val()) + 1;
                        $("#cant-"+codigo).val(cantidad);
                        total();
                    }
                }
            },'json');
            $("#searchProducto").val("").focus();

        }
    }

    function total() {
        let neto = 0;
        let iva = 0;
        let total = 0;
        $(".det").each(function(data, index) {
            validateCantidad($(index).val());
            const id = $(index).val();
            total += parseInt($("#subtotal-"+id).text());
        })
        neto = (total/1.19).toFixed(1);
        iva = (total-neto).toFixed(1);
        $("#textNeto").html("$ "+neto);
        $("#textIva").html("$ "+iva);
        $("#textTotal").html("$ "+total);
        $("#total").val(total);
    }

    function cantidad(id) {
        const valor = parseInt($("#valor-"+id).text());
        const cantidad = parseInt($("#cant-"+id).val());
        let subtotal = (valor*cantidad);
        $("#subtotal-"+id).text(subtotal);
        $("#subt-"+id).val(subtotal);
        total();
    }

    function validateCantidad(id) {
        const valor = parseInt($("#valor-"+id).text());
        const cantidad = parseInt($("#cant-"+id).val());
        let subtotal = (valor*cantidad);
        $("#subtotal-"+id).text(subtotal);
        $("#subt-"+id).val(subtotal);
    }

    function validar() {
        const cantidad = $(".det").length;
        let status = true;
        if (cantidad == 0) {
            status = false;
            alert("Agregue un Producto al Carrito.");
        }
        return status;
    }

</script>