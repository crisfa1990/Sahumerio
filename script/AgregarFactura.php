<?php include "header.php" ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">  
                <form method="post" action="addFacturaBD.php" method="POST">    
                    <legend> Hola</legend>
                    <div class="form-group"> 			
                        <input type="text" class="form-control" name="proveedor" placeholder="Ingresa proveedor" required>			
                    </div>
                    <div class="form-group">		
                        <input type="text" class="form-control" name="nFactura" placeholder="Ingresa numero de factura" required><br>			
                        <select id="select" placeholder="hola">Elige una opción
                            <option value="">Con IVA</option>
                            <option value="">Sin IVA</option>
                        </select>
                    </div>

                    <div class="form-group">                        			
                        <div class="row">       
                            <div class="col-sm-7 col-md-7"><input type="text" class="form-control" name="producto" placeholder="Ingresa producto" required>	</div>
                            <div class="col-sm-2 col-md-2"><input type="text" class="form-control" name="prodCantidad" placeholder="Ingrese cantidad" required></div>
                            <div class="col-sm-3 col-md-3"><input type="text" class="form-control" name="prodPrecio" placeholder="Ingrese Precio" required></div>
                        </div>
                        <button type="button" class="btn btn-secondary">Agregar otro producto</button>
                    </div>
                                    
                    <div class="form-group"> <!--Formulario para Bootstrap -->				
                        <input type="text" class="form-control" name="proveedor" placeholder="Ingresa proveedor" required>			
                    </div>
                        <div>Separacion</div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Agregar factura.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "scripts.php" ?>
</body>
