<?php
//$nome = $ POST["nome"];
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$genero = filter_input(INPUT_POST, 'genero');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$informacao = filter_input(INPUT_POST, 'informaçao');

?>
table>
	<th>NOME</th>
	<th>EMAIL</th>
	<th>TELEFONE</th>
	<th>GENERO</th>
	<th>CIDADE</th>
	<th>ESTADO</th>
	<th>INFORMAÇAÕ</th>
		<td>
			<?php echo $nome; ?>
		</td>
		<td>
			<?php echo $email; ?>
		</td>
		<td>
			<?php echo $telefone; ?>
		</td>
		<td>
			<?php 
				if ($genero=="F"){
					echo "FEMININO";
				}elseif($genero=="M") {
					echo "MASCULINO";
				}elseif($genero=="X") {
					echo "OUTRO";
				}else {
					echo "Informar genero";
				}
			?>
		</td>
		<td>
			<?php echo $cidade; ?>
		</td>
		<td>
			<?php echo $estado; ?>
		</td>
		<td>
			<?php  
				if ($receberInformacao==1){
					echo "SIM";
				}else{
					echo "NÂO"
				} 
			?>
		</td>
	</tr>
</table>
			