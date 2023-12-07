<form method="POST" id="frmEditaProjeto" name="frmEditaProjeto">
<input type="hidden" class="form-control" id="idProjeto" name="idProjeto" value="<?php echo $_POST['projeto_id']?>">
<div class="form-group">
				<label class="labelForms" for="nomeProjeto">Título do Projeto:</label>
				<input type="text" class="form-control formss" id="nomeProjeto" name="nomeProjeto" value="<?php echo $projeto_id['nomeProjeto'] ?>" <?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>>
			</div>
			<div class="form-group ">
				<label class="labelForms">Tipo de Projeto</label>
				<select class="form-control formss" name="tipoProjeto" id="tipoProjeto" <?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>>
					<option value="Iniciação Científica" <?php if($projeto_id['tipoProjeto']=="Iniciação Científica" ) {?> selected <?php } ?>>Iniciação Científica</option>
					<option value="Treinamento Profissional" <?php if($projeto_id['tipoProjeto']=="Treinamento Profissional" ) {?> selected <?php } ?>>Treinamento Profissional</option>
					<option value="Monitoria" <?php if($projeto_id['tipoProjeto']=="Monitoria" ) {?> selected <?php } ?>>Monitoria</option>
					<option value="Extensão" <?php if($projeto_id['tipoProjeto']=="Extensão" ) {?> selected <?php } ?>>Extensão</option>
				</select>
			</div>
			<div class="form-group">
				<label class="labelForms" for="descricao">Descrição:</label>
				<textarea type="text" class="form-control formss" id="descricao" name="descricao" <?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>><?php echo $projeto_id['descricao'] ?></textarea>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="labelForms" for="vagaRemunerada">Início processo seletivo:</label>
                    <div class='input-group'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' id="data_inicio_processo" name="data_inicio_processo" placeholder="XX/XX/XXXX" class="form-control" value="<?php echo data($projeto_id['data_inicio_processo']) ?>" <?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>/>
                	</div>
                </div>
                <div class="form-group col-md-6">
					<label class="labelForms" for="vagaRemunerada">Fim processo seletivo:</label>
                    <div class='input-group'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' id="data_fim_processo" name="data_fim_processo" placeholder="XX/XX/XXXX" class="form-control" value="<?php echo data($projeto_id['data_fim_processo']) ?>"<?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>/>
                	</div>
                </div>
				<div class="form-group col-md-6">
					<label class="labelForms" for="metodoDeEntrada">Método de entrada:</label>
					<input type="text" class="form-control formss" id="metodoDeEntrada" name="metodoDeEntrada" placeholder="Digite o médtodo de entrada" value="<?php echo $projeto_id['metodoDeEntrada'] ?>"<?php if($_SESSION['user_tipo'] == 1) echo 'disabled'; ?>>
				</div>
				<div class="form-group col-md-6">
					<label class="labelForms" for="nomeProjeto">Quantidade de vagas:</label>
					<input type="number" class="form-control formss" id="qtdVagas" name="qtdVagas" value="<?php echo $projeto_id['qtdVagas'] ?>" disabled>
				</div>

                <?php 
                $i = 1;
                while($bolsa = mysqli_fetch_array($resultado2)){?>
                    <div class='form-group col-md-12'>
                        <h5>Bolsa <?php echo $i ?></h5>
                    </div>
                    <div class='form-group col-md-6'>
                        <label class='labelForms' for=<?php echo 'e_voluntaria'.$i ?>>Bolsa Voluntária?</label>
                        <select class='form-control formss' name= <?php echo 'e_voluntaria'.$i ?> id=<?php echo 'e_voluntaria'.$i ?> disabled>
                            <option value='Sim' <?php if($bolsa['e_voluntaria']=="Sim" ) {?> selected <?php } ?>>Sim</option>
                            <option value='Não' <?php if($bolsa['e_voluntaria']=="Não" ) {?> selected <?php } ?>>Não</option>
                        </select></div>
                    <div class='form-group col-md-6'>
                        <label class='labelForms' for=<?php echo 'valor'.$i ?>>Valor:</label>
                        <input type='float' class='form-control formss' id=<?php echo 'valor'.$i ?> name=<?php echo 'valor'.$i ?> disabled value="<?php echo $bolsa['valor'] ?>">
                    </div>
                <?php $i++; 
                }
                ?>

				<!--<div class="input_fields_wrap"></div>-->
				<!--<div class="form-group col-md-6">
					<label class="labelForms" for="preRequisito">Pré Requisito:</label>
					<input type="text" class="form-control formss" id="inputField4">
				</div>-->

                <?php if($_SESSION['user_tipo'] == 2){?>
                    <button type="button" class="btn btn-primary">Ver Alunos Inscritos</button>
                <?php } ?>
			</div>
</form>

<?php
    function data($data){
        return date("d/m/Y", strtotime($data));
    } 
?>