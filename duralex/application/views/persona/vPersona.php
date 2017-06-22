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
			<td><input type="text" name="txtRun"></td>
		</tr>

		<tr>
			<td><label>Nombre</label></td>
			<td><input type="text" name="txtNombre"></td>
		</tr>

		<tr>
			<td><label>Ap Paterno</label></td>
			<td><input type="text" name="txtPaterno"></td>
		</tr>

		<tr>
			<td><label>Ap Materno</label></td>
			<td><input type="text" name="txtMaterno"></td>
		</tr>

		<tr>
			<td><label>Email</label></td>
			<td><input type="email" name="txtEmail"></td>
		</tr>

		<tr>
			<td><label>fecha Nac</label></td>
			<td><input type="date" name="datFecha"></td>
		</tr>

		<tr>
			<td><label>Usuario</label></td>

		</tr>


		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="txtUsuario"></td>
		</tr>


		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="txtcontra"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" value="Ingresa"></td>
		</tr>
	</table>

	</form>
</body>
</html>
