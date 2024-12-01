<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<style>
    .top_stats_wrapper {
        display: flex;
        padding: 0;
        padding-top: 5px;
        padding-left: 15px;
        flex-direction: column;
        justify-content: start;
    }

    .passos {
        margin-top: 10px;
    }
</style>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                Conversor PEM </h4>
                        </div> <br />
                        <p>Os passos a seguir são necessários para você usar o módulo do Gerência Net no Sistema.</p><br />
                        <strong>Vamos lá!</strong>
                        <ul class="passos">
                            <li><strong>Passo 1)</strong> Baixe o arquivo do portal do gerência net, <a href="https://sistema.gerencianet.com.br/" target="_blank">clicando aqui.</a></li>
                            <li><strong>Passo 2)</strong> Caso o arquivo venha sem a extensão <strong>.p12</strong>, renomeie-o e adicione-a.</li>
                        </ul>
                        <strong>Passo 3)</strong> <br><br />
                        <form action="" id="converterForm" enctype="multipart/form-data" method="post">
                            <div class="top_stats_wrapper">
                                <label for="cert_p12">Selecione o seu novo certificado baixado <b>.P12</b></label>
                                <input required type="file" accept=".p12" name="cert_p12" id="cert_p12" style="border:0;width:100%;">
                            </div>

                            <div class="radio radio-info">
                                <input type="radio" id="producacao" name="nome" value="producao" checked="">
                                <label for="producacao">O certificado será para produção.</label>
                            </div>

                            <div class="radio radio-info">
                                <input type="radio" id="homologacao" name="nome" value="homologacao">
                                <label for="homologacao">O certificado será para homologação.</label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" class="capability" checked id="configurar-automaticamente" name="configurar-automaticamente">
                                <label for="configurar-automaticamente">
                                    Você deseja que este aquivo já seja configurado na área de configuração do módulo? <i class="fa fa-question-circle pull-left"
                                    data-toggle="tooltip" data-title="Se você marcar esta opção, você não precisará entrar em mídia, copiar o nome do arquivo e salvar nas configurações do módulo de pagamento do gerência net." data-original-title="" title=""></i></label>
                            </div>

                            <input type="hidden" name="converter">

                            <div class="alert alert-danger">
                                <p><strong>Atenção!</strong><br>
                                    Ao clicar em converter, caso haja um arquivo com o mesmo nome em media/gerencianet/&lt;NOME_DO_ARQUIVO&gt;, ele será sobrescrito.</p>
                            </div>
                            <button id='btn-converter-p12toPem' class="btn btn-info mright5 display-block">Converter</button>
                        </form>

                        <script>
                            window.addEventListener('load', function() {
                                $('#converterForm').submit(function(ev) {
                                    ev.preventDefault();
                                    const formData = new FormData(this);
                                    $('#btn-converter-p12toPem').html("Convertendo, aguarde, por favor...").attr('disabled', true);
                                    try {
                                        $.ajax({
                                            type: "POST",
                                            "url": `${site_url}gateways/gerencia_net/converterCertificado`,
                                            data: formData,
                                            processData: false,
                                            contentType: false
                                        }).done(function(data) {
                                            if (data == 'success') {
                                                alert('Esta operação foi realizada com sucesso.');
                                            } else {
                                                alert('Ops! Houve um erro.\n' + data)
                                            }
                                            $('#btn-converter-p12toPem').html("Converter").attr('disabled', false);
                                        })
                                    } catch (error) {
                                        console.log(error);
                                    }
                                    return;
                                })
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
</body>

</html>