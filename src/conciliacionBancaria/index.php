<form class="border border-secondary-subtle rounded bg-light" method="post" id="form-conciliacion" onsubmit="grabarConciliacion(event)">
	<h3 class="form-header p-3 border-bottom border-secondary-subtle custom-title">Conciliación Bancaria</h3>
	<!-- Mensaje de error al usuario -->
	<div class="p-3">
		<div class="error-container" id="mensaje-cliente"></div>
	</div>

	<!-- ----------------------------------------------------------- CABECERA ----------------------------------------------------------- -->
	<div class="row p-3 justify-content-end align-items-end d-flex">
		<div class="col-2 me-3">
			<label for="inputMeses" class="form-label"><strong>Meses</strong></label>
			<select class="form-select" name="meses" id="inputMeses">
				<option value=""></option>
				
			</select>
		</div>

		<div class="col-2 me-3">
			<label for="inputAnio" class="form-label"><strong>Año</strong></label>
			<select class="form-select" name="anio" id="inputAnio">
				<option value=""></option>
				
			</select>
		</div>

		<div class="col-3" id="btn-custom-container">
			<button type="button" class="btn button-custom" id="btn-custom" onclick="realizarConciliacion()">Realizar Conciliación</button>
		</div>
	</div>
	<!-- ----------------------------------------------------------- PRIMERA SECCIÓN (MÁS) ----------------------------------------------------------- -->
	<!-- Mostrar el nombre del mes anterior seleccionado -->
	<div class="row justify-content-between pe-5 ps-2">
		<label for="inputSaldoLibro" class="col-sm-2 col-form-label w-auto text-uppercase" id="labelSaldoLibro"><strong>SALDO SEGÚN LIBRO AL</strong></label>
		<div class="col-3">
			<input type="saldoLibro" class="form-control" name="saldo_anterior" id="inputSaldoLibro" readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputDeposito" class="col-md-3 col-form-label"><strong>Más: Deposito</strong></label>
		<div class="col-3 offset-2">
			<input type="deposito" class="form-control" name="mas_depositos" id="inputDeposito" readonly>
		</div>
	</div>

	<div class="row mb-2 ps-4">
		<label for="inputChequesAnulados" class="col-md-3 col-form-label"><strong>Cheques Anulados</strong></label>
		<div class="col-3 offset-2">
			<input type="chequesAnulados" class="form-control" name="mas_cheques_anulados" id="inputChequesAnulados"  readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputNotasCredito" class="col-md-3 col-form-label"><strong>Notas de Crédito</strong></label>
		<div class="col-3 offset-2">
			<input type="notasCredito" class="form-control" name="mas_notas_credito" id="inputNotasCredito" readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputAjustesLibro" class="col-md-3 col-form-label"><strong>Ajustes</strong></label>
		<div class="col-3 offset-2">
			<input type="ajustesLibro" class="form-control" name="mas_ajustes_libro" id="inputAjustesLibro"  readonly>
		</div>
	</div>

	<!-- SUB1 -->
	<div class="row mb-2 justify-content-end pe-5 ps-2">
		<label for="inputSubtotal" class="col-sm-2 col-form-label"><strong>Subtotal</strong></label>
		<div class="col-3">
			<input type="subtotal" class="form-control" name="sub_primera" id="inputSubtotal" readonly>
		</div>
	</div>

	<!-- (SUBTOTAL1) -->
	<div class="row justify-content-between pe-5 ps-2">
		<label for="inputSubtotalFinal" class="col-sm-2 col-form-label"><strong>SUBTOTAL</strong></label>
		<div class="col-3">
			<input type="subtotalFinal" class="form-control" name="subtotal_primera" id="inputSubtotalFinal"  readonly>
		</div>
	</div>

	<!-- ----------------------------------------------------------- SEGUNDA SECCIÓN (MENOS) ----------------------------------------------------------- -->
	<div class="row ps-4 mb-2">
		<label for="inputCkGirados" class="col-md-3 col-form-label"><strong>Menos: Cheques girados en el mes</strong></label>
		<div class="col-3 offset-2">
			<input type="ckGirados" class="form-control" name="menos_cheques_girados" id="inputCkGirados" readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputNotasDebito" class="col-md-3 col-form-label"><strong>Notas de Débitos</strong></label>
		<div class="col-3 offset-2">
			<input type="notasDebito" class="form-control" name="menos_notas_debito" id="inputNotasDebito" readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputAjusteCkGirados" class="col-md-3 col-form-label"><strong>Ajustes</strong></label>
		<div class="col-3 offset-2">
			<input type="ajusteCkGirados" class="form-control" name="menos_ajustes_libro" id="inputAjusteCkGirados" readonly>
		</div>
	</div>

	<!-- SUB2 -->
	<div class="row mb-2 justify-content-end pe-5 ps-2">
		<label for="inputSubtotalMenosLibros" class="col-sm-2 col-form-label"><strong>Subtotal</strong></label>
		<div class="col-3">
			<input type="subtotalMenos" class="form-control" name="sub_segunda" id="inputSubtotalMenosLibros" readonly>
		</div>
	</div>

	<!-- SALDOLIBROS -->
	<div class="row justify-content-between pe-5 ps-2">
		<label for="inputSaldoConsiliadoLibros" class="col col-form-label text-uppercase" id="labelSaldoConsiliadoLibros"><strong>SALDO CONCILIADO SEGÚN LIBROS AL</strong></label>
		<div class="col-3">
			<input type="saldoConsiliado" class="form-control" name="saldo_libros" id="inputSaldoConsiliadoLibros"  readonly>
		</div>
	</div>

	<hr>

	<!-- ----------------------------------------------------------- TERCERA SECCIÓN (BANCO) ----------------------------------------------------------- -->
	<div class="row justify-content-between pe-5 ps-2">
		<label for="inputSaldoBanco" class="col-sm-2 col-form-label w-auto text-uppercase" id="labelSaldoBanco"><strong>SALDO EN BANCO AL</strong></label>
		<div class="col-3">
			<input type="saldoBanco" class="form-control" name="saldo_banco" id="inputSaldoBanco">
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputDepositoTransito" class="col-md-3 col-form-label"><strong>Más: Depósitos en Tránsitos</strong></label>
		<div class="col-3 offset-2">
			<input type="depositoTransito" class="form-control" name="mas_depositos_transito" id="inputDepositoTransito"  readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputChequesCirculacion" class="col-md-3 col-form-label"><strong>Menos: Cheques en Circulación</strong></label>
		<div class="col-3 offset-2">
			<input type="chequesCirculacion" class="form-control" name="menos_cheques_circulacion" id="inputChequesCirculacion" readonly>
		</div>
	</div>

	<div class="row ps-4 mb-2">
		<label for="inputAjusteBanco" class="col-md-3 col-form-label"><strong>Más: Ajustes</strong></label>
		<div class="col-3 offset-2">
			<input type="ajusteBanco" class="form-control" name="mas_ajustes_banco" id="inputAjusteBanco"  readonly>
		</div>
	</div>

	<!-- SUB3 -->
	<div class="row mb-2 justify-content-end pe-5 ps-2">
		<label for="inputSubtotalMenosBanco" class="col-sm-2 col-form-label"><strong>Subtotal</strong></label>
		<div class="col-3">
			<input type="subtotalMenos" class="form-control" name="sub_tercero" id="inputSubtotalMenosBanco" readonly>
		</div>
	</div>

	<!-- SALDO_CONCILIADO -->
	<div class="row justify-content-between pe-5 ps-2">
		<label for="inputSaldoConsiliadoBanco" class="col col-form-label text-uppercase" id="labelSaldoConsiliadoBanco"><strong>SALDO CONCILIADO IGUAL A BANCO AL</strong></label>
		<div class="col-3">
			<input type="saldoConsiliado" class="form-control" name="saldo_conciliado" id="inputSaldoConsiliadoBanco"  readonly>
		</div>
	</div>

	<hr>

	<!-- ----------------------------------------------------------- BOTONES ----------------------------------------------------------- -->
	<div class="d-grid gap-5 d-md-flex justify-content-md-center pb-3" id="btn-custom-container">
		<button type="submit" class="btn button-custom" id="btn-custom">Grabar</button>
		<button type="reset" class="btn button-custom"  onclick="resetMensaje()">Nuevo</button>
	</div>

</form>
