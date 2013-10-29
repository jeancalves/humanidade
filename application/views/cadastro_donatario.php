<!-- Star page view cadastro donatario -->
<div class="row">
	<section class="container">
		<section class="span6">
			<?php echo form_open('donatario/cadastro'); ?>
			<div class="control-group">
				<label for="" class="control-label">Donatário (Instituição)<span class="">*</span></label>
				<div class="controls">
					<input name="donatario" type="text" id="donatario" class="input-xxlarge">
				</div>
    		</div>

    		<div class="control-group">
				<label for="cnpj" class="control-label">CNPJ<span class="">*</span></label>
				<div class="controls">
					<input name="cnpj" type="text" value="" id="cnpj" class="input-large">
				</div>
    		</div>

    		<div class="control-group group-two">
    			<div class="span4">
    				<label for="endereco" class="control-label">Endereço (Logradouro)<span class="">*</span></label>
					<div class="controls">
						<input name="endereco" type="text" value="" id="endereco" class="input-xlarge">
					</div>
    			</div>

				<label for="numero" class="control-label">Numero<span class="">*</span></label>
				<div class="controls">
					<input name="numero" type="text" value="" id="numero" class="input-small">
				</div>
    		</div>

    		<div class="control-group">
                <div class="span2">
                	<label class="control-label">Estado (UF)<span class="">*</span></label>
                	<div class="controls">
	                    <select id="uf_donatario" name="uf" class="input-small">
	                    	<option value=""></option>
	                    </select>
                	</div>
                </div> <!-- span2 -->

				<label class="control-label">Cidade<span class="">*</span></label>
                <div class="controls">
                    <select id="cidade" name="cidade" class="input-xlarge">
                    	<option value=""></option>
                    </select>
                </div>

            </div> <!-- control-group -->

            <div class="control-group">
				<label for="cep" class="control-label">CEP<span class="">*</span></label>
				<div class="controls">
					<input name="cep" type="text" value="" id="cep">
				</div>
    		</div> <!-- control-group -->

    		<div class="control-group">
				<label for="foto" class="control-label">Foto<span class="">*</span></label>
				<div class="controls">
					<input type="file" title="Search for a file to add">
				</div>
    		</div>
     
			<button type="submit" class="btn btn-medium btn-primary">Cadastrar</button>
		<?php echo form_close(); ?>

		<script id="gerar_estado_template" type="text/x-handlebars-template">
			{{#estados}}
				<option value="{{sigla}}">{{sigla}}</option>
			{{/estados}}
		</script>

		<script id="gerar_cidade_template" type="text/x-handlebars-template">
			{{#cidades}}
				<option value="{{this}}">{{this}}</option>
			{{/cidades}}
		</script>

		<script type="text/javascript">
			jQuery(document).ready(function($){
				var source = $('#gerar_estado_template').html();
				var template = Handlebars.compile(source);
				var codigo = template(geral_estados);

				$('#uf_donatario').append(codigo);

				$('#uf_donatario').change(function(event) {

					$('#cidade').empty();

					var uf = $(this).val();
					var source = $('#gerar_cidade_template').html();
					var template = Handlebars.compile(source);

					var content = {cidades : geral_cidades[uf]};
					var codigo = template(content);

					$('#cidade').append(codigo);
				});
			});
		</script>

		</section> <!-- span5 -->
	</section> <!-- container -->
</div> <!-- row -->