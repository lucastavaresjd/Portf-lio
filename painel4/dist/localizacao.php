<?php
         include "./templates/header.php";
           include "./templates/menu.php";
?>

<div class="col s12 agendamento conteudo">

	<div class="row">
		<div class="col s12">
			<h6>Localização</h6>
		</div>
	</div>
	<div class="row">
		<div class="offset-l2 col s12 l8  ">
			<div class="cor1 bordas">
				<div id="tabela_conteudo" class="col s12 tabela_bg">
					<table id="tabela_pacientes" class="striped responsive-table tabela-cor">
						<thead>
							<tr>
								<th>Nome Paciente</th>
								<th>Localização</th>
							</tr>
						</thead>
							<tbody id="listadePacienteslocalizacao">

							<tr>
							<td>Julio Gael Osvaldo Silva</td>
							<td>Ecocardiograma</td>
							</tr>

							<tr>
							<td>Heitor Rafael Lima</td>
							<td>Ecocardiograma</td>
							</tr>

							<tr>
							<td>Márcia Emilly Corte Real</td>
							<td>Endoscopia</td>
							</tr>

							<tr>
							<td>Natália Fernanda Lopes</td>
							<td>Ultrassonografia</td>
							</tr>
							</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col  s12 l3 info ">
			<div class="cor2 bordas">
				<div class="row">
					<div class="col s12" id="agendamemento_card_notificacao">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
   include './templates/frameworks.html';
   ?>
   <!-- <script src="./js/localizacao.js"></script> -->


<script>
    $(document).ready(function () {
        $('.tabs').tabs();
    });
</script>


<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script> 

<?php
   include './templates/footer.html';
   ?>