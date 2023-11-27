<?= $this->Html->css('Site/Vans/signup.css') ?>
<div class="header-van"></div>
<div class="vans form col-md-8 col-xs-12 col-xs-offset-0 col-md-offset-2 content" id="signup-van">

    <?php
        $this->Form->create($usuario, [
            'type' => 'file',
            'url' => [
                'controller' => 'vans',
                'action' => 'precadastro'
            ]
        ]);
    ?>
    <div class="col-md-4 active">
        <div class="active">
            <?php
                echo $this->Html->image('Site/vans/icone_dados_anexos_ativo.png', [
                    'alt' => 'Logo',
                    'class' => 'img-responsive active col-md-6',
            ]);
            ?>
            <h4 class="col-md-6">Dados da van</h4>
        </div>
        <div>
            <?php
                echo $this->Html->image('Site/vans/icone_dados_anexos_inativo.png', [
                    'alt' => 'Logo',
                    'class' => 'img-responsive col-md-6',
                ]); 
            ?>
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="active">
            <h4 class="col-md-6">Dados do condutor</h4>
            <?php
                echo $this->Html->image('Site/vans/icone_dados_condutor_ativo.png', [
                    'alt' => 'Logo',
                    'class' => 'img-responsive active  col-md-6',
                ]); 
            ?>
        </div>
        <div>
            <?php
                echo $this->Html->image('Site/vans/icone_dados_condutor_inativo.png', [
                    'alt' => 'Logo',
                    'class' => 'img-responsive  col-md-6',
                ]); 
            ?>
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="active">
            <h4 class="col-md-6">Anexar documentos</h4>
            <?php
                echo $this->Html->image('Site/vans/icone_dados_van_ativo.png', [
                    'alt' => 'Logo',
                    'class' => 'img-responsive active  col-md-6',
                ]); 
            ?>
        </div>

        <div>
        <?php
            echo $this->Html->image('Site/vans/icone_dados_van_inativo.png', [
                'alt' => 'Logo',
                'class' => 'img-responsive  col-md-6',
            ]); 
        ?>
        </div>
    </div>
    <fieldset id="first-fieldset" class="active">
        <?php
            echo $this->Form->control('cliente.vans.0.VEICULO', [
                'label' => 'NOME DE APRESENTAÇÃO',
                'placeholder' => 'Tio Eduardo, Tia Maria'
            ]);
            echo $this->Form->control('cliente.vans.0.FABRICANTE', ['label' => 'MARCA', 'placeholder' => 'Renault']);
            echo $this->Form->control('cliente.vans.0.MODELO', ['label' => 'MODELO', 'placeholder' => 'Master']);
            echo $this->Form->control('cliente.vans.0.ANO', ['label' => 'ANO DE FABRICAÇÃO', 'placeholder' => '2023']);
            echo $this->Form->control('cliente.vans.0.CAPACIDADE', [
                'label' => 'QUANTIDADE DE LUGARES',
                'placeholder' => '20'
            ]);
            echo $this->Html->label('POSSUI WI-FI?');
            echo $this->Form->radio('cliente.vans.0.wifi', [
                ['value' => 0, 'text' => 'NÃO'],
                ['value' => 1, 'text' => 'SIM']
            ]);
            echo $this->Html->label('POSSUI TV?');
            echo $this->Form->radio('cliente.vans.0.tv', [
                ['value' => 0, 'text' => 'NÃO'],
                ['value' => 1, 'text' => 'SIM']
            ]);
            echo $this->Html->label('POSSUI AR CONDICIONADO?');
            echo $this->Form->radio('cliente.vans.0.ar_condicionado', [
                ['value' => 0, 'text' => 'NÃO'],
                ['value' => 1, 'text' => 'SIM']
            ]);
            // echo $this->Html->label('TETO DA VAN?');
            // echo $this->Form->radio('cliente.vans.0.ar_condicionado', [['value' => 0, 'text' => 'TETO ALTO'], ['value' => 1, 'text' => 'TETO BAIXO']]);
            echo $this->Form->control('cliente.vans.0.PLACA', [
                'label' => 'PLACA',
                'placeholder' => 'Digite a placa da sua van',
                'maxlength' => 7,
                'minlength' => 7
            ]);
            echo $this->Form->control('cliente.vans.0.STP_GETAX', ['label' => 'NÚMERO DA LICENÇA']);
            //echo $this->Form->control('cliente.vans.0.expiration_date', ['empty' => true, 'label'=>'DATA DE EXPIRAÇÃO DA LICENÇA']);

        ?>
        <div class="date">
            <?php
                echo $this->Form->day('cliente[vans][0][expiration_date][day]');
            ?>
            <?php 
                echo $this->Form->month('cliente[vans][0][expiration_date][month]', [
                    'monthNames' => [
                        '01' => 'Janeiro',
                        '02' => 'Fevereiro',
                        '03' => 'Março',
                        '04' => 'Abril',
                        '05' => 'Maio',
                        '06' => 'Junho',
                        '07' => 'Julho',
                        '08' => 'Agosto',
                        '09' => 'Setembro',
                        '10' => 'Outubro',
                        '11' => 'Novembro',
                        '12' => 'Dezembro'
                    ],
                ]);
            ?>
            <?php
                echo $this->Form->year('cliente[vans][0][expiration_date][year]', [
                    'minYear' => date('Y') - 3,
                    'maxYear' => date('Y') + 3
                ]);
            ?>
        </div>
        <button>PRÓXIMO</button>
    </fieldset>
    <fieldset>
        <?php
            echo $this->Form->control('NOME', [
                'label' => 'NOME COMPLETO DO RESPONSÁVEL (Físico ou Jurídico)',
                'id' => 'nome-van'
            ]);
            echo $this->Form->control('cliente.RG', ['label' => 'RG']);
            echo $this->Form->control('cliente.CPF', ['label' => 'CPF', 'id' => 'cliente-cpf-van']);
            echo $this->Form->control('EMAIL', ['label' => 'E-MAIL']);
            echo $this->Form->control('cliente.vans.0.TELEFONE1', [
                'label' => 'TELEFONE PARA CONTATO',
                'id' => 'cliente-vans-0-telefone1-van',
                'maxlength' => 11,
                'minlength' => 10
            ]);
            echo $this->Form->control('cliente.vans.0.TELEFONE2', [
                'label' => 'CELULAR',
                'id' => 'cliente-vans-0-telefone2-van',
                'maxlength' => 11,
                'minlength' => 10
            ]);
            echo $this->Form->control('cliente.CEP', ['label' => 'CEP', 'id' => 'cliente-cep-van']);
            echo $this->Form->control('cliente.ENDERECO', ['label' => 'ENDEREÇO']);
            echo $this->Form->control('cliente.NUMERO', ['label' => 'NÚMERO']);
            echo $this->Form->control('cliente.COMPLEMENTO', ['label' => 'COMPLEMENTO']);
            echo $this->Form->control('cliente.UF', [
                'label' => 'ESTADO',
                'style' => 'text-transform:uppercase'
            ]);
            echo $this->Form->control('cliente.MUNICIPIO', ['label' => 'CIDADE']);
        ?>
        <button>PRÓXIMO</button>
    </fieldset>


    <fieldset id="last-fieldset">
        <?php
            echo $this->Form->control('ID', ['type' => 'hidden']);

            echo $this->Form->control('USUARIO', ['label' => 'Usuário', 'type' => 'hidden']);
            echo $this->Form->control('SENHA', ['type' => 'hidden', 'id' => 'van-usuarios-senha-van']);

            echo $this->Form->control('NIVEL', ['type' => 'hidden', 'value' => 1]);
            echo $this->Form->control('status', ['value' => 0, 'type' => 'hidden']);
        ?>

        <div class="input file">
            <label>CARTEIRA DE HABILITAÇÃO</label>
            <div>
                <p id="file-habilitation"></p>
                    <span class="btn btn-default btn-file">
                    Anexar Arquivo
                    <?php
                        echo $this->Form->control('cliente.vans.0.habilitation_file', [
                            'label' => false,
                            'type' => 'file'
                        ]);
                    ?>
                    </span>
            </div>
        </div>
        <div class="input file">

            <label>LICENÇAS EXIGIDAS PELA LEGISLAÇÃO LOCAL</label>
                <div>
                    <p id="file-stp"></p>
                    <span class="btn btn-default btn-file">
                    Anexar Arquivo
                    <?php
                        echo $this->Form->control('cliente.vans.0.stp_getax_file', [
                            'label' => false,
                            'type' => 'file'
                        ]);

                    ?>
                    </span>
                </div>
        </div>
        <div class="input file">

            <label>APÓLICE DE SEGUROS</label>
                <div>
                    <p id="file-seguro"></p>
                    <span class="btn btn-default btn-file">
                    Anexar Arquivo
                    <?php
                        echo $this->Form->control('cliente.vans.0.seguro_file', [
                            'label' => false,
                            'type' => 'file'
                        ]);
                    ?>
                    </span>
                </div>
        </div>
        <?php

            echo $this->Form->control('cliente.vans.0.ENDERECO_GARAGEM', ['label' => 'Endereço garagem', 'type' => 'hidden']);

            echo $this->Form->control('cliente.vans.0.ID', ['type' => 'hidden']);


            echo $this->Form->control('cliente.ID', ['type' => 'hidden']);

            echo $this->Form->control('cliente.NOME', ['type' => 'hidden', 'id' => 'cliente-nome-van']);




        ?>
        <?= $this->Form->button(__('ENVIAR')) ?>
    </fieldset>




<?= $this->Form->end() ?>
</div>



<?= $this->Html->script('Site/signup'); ?>
<script>
    $(function() {
        Signup.add();

    })
</script>