<!DOCTYPE html>
<html>
<head>
	<title>vista de persona</title>
</head>
<body>
<h1>cargo vista de registro persona</h1>

	<form action="<?php echo base_url(); ?>cPersona/guardar" method="POST" accept-charset="utf-8">

	<table>

		<tr>
			<td><label>Run</label></td>
			<td><input type="text" name="rut"></td>
		</tr>

		<tr>
			<td><label>Nombre</label></td>
			<td><input type="text" name="nombre"></td>
		</tr>

		<tr>
			<td><label>Apellido</label></td>
			<td><input type="text" name="apellido"></td>
		</tr>

		<tr>
			<td><label>Direccion</label></td>
			<td><input type="text" name="direccion"></td>
		</tr>

		<tr>
			<td><label>telefonos</label></td>
			<td><input type="text" name="telefonos"></td>
		</tr>

		<tr>
			<td>Tipo Persona</td>
			<td>
				<select name="tipo_persona">
					<option value="NATURAL">NATURAL</option>
					<option value="JURIDICA">JURIDICA</option>
				</select>				
			</td>
		</tr>

		<tr>
			<td>Rol</td>
			<td>
				<select>
					<option value="CLIENTE">CLIENTE</option>
					<option value="SECRETARIA">SECRETARIA</option>
					<option value="ADMINISTRADOR">ADMINISTRADOR</option>
					<option value="GERENTE	">GERENTE</option>
				</select>				
			</td>
		</tr>		

		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="password"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" value="Ingresa"></td>
		</tr>
	</table>

	</form>
</body>
</html>
