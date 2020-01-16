<h1 class="text-center"> Formulario</h1>
		<form id="product-form" name="p1" action="empaltaemp1.php" method="post" class="card-body">
						<div class="form-group">
                            DNI <input type="text" name="dni" placeholder="DNI" class="form-control">
                        </div>
						<div class="form-group">
                            Nombre del Empleado <input type="text" name="nombre" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            Apellidos del Empleado <input type="text" name="apellido" placeholder="Apellidos" class="form-control">
                        </div>
                        <div class="form-group">
                            Fecha de nacimiento <input type="Date" name="fecha" placeholder="Fecha" class="form-control">
                        </div>
                        <div class="form-group">
                            Salario <input type="text" name="salario" placeholder="Salario" class="form-control">
                        </div>
                        <div class="form-group">
                            Departamentos
                            <select name="departamento">
                            <?php 
                            require "empaltaemp-funciones.php";
                            $array_dpto=lista_dpto("localhost","root","rootroot","empleadonn");
                            for ($i = 0; $i < count($array_dpto); $i++) {
                                echo "<option>".$array_dpto[$i]."</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <input type="submit" name="submit" value="Registrar" class="btn btn-warning disabled">
                    </form>
		
	


