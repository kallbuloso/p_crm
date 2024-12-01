<script>
    const invoice_id = '<?php echo $id ?>';

    const hash = '<?php echo $hash ?>';
</script>

<body class="customers safari viewinvoice">
    <style>
        @media (min-width:968px) {
            .jzdkxv {
                width: 40;
            }

            #mobile {
                display: none !important;
            }

            .textadj {
                text-align: right;
            }

            #checklogo img {
                width: 200px;
                height: 100px;
            }
        }

        @media (max-width:968px) {
            .jzdkxv {
                width: 80;
            }

            #desktop {
                display: none !important;
            }

            .textadj {
                text-align: center;
            }

            #textadj {
                text-align: center;
            }

            #checklogo img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 150px;
                height: 80px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            #hidemobile {
                display: none;
            }
        }

        .jzdkxv {
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: 100%;
            padding-top: 10px;
            margin-top: 1.5rem;
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
        }

        .ceBZw ul {
            padding-top: 1rem;
            border-top-color: rgb(214, 214, 214);
        }

        .ijsSky>svg {
            width: 40px;
            min-width: 40px;
        }

        .ijsSky {
            color: rgb(102, 102, 102);
            list-style-type: none;
            list-style-position: initial;
            list-style-image: initial;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            row-gap: 0.5rem;
            column-gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        #bank-slip svg {
            max-width: 45px;
            max-height: 45px;
            margin-right: 5px;
            vertical-align: middle;
            flex-shrink: 0;
        }

        .pixx {
            margin-bottom: 19px;
            margin-top: 10px;
        }

        .placeholder-item {
            box-shadow: 0 4px 10px 0 rgba(33, 33, 33, 0.15);
            border-radius: 4px;
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .placeholder-item::before {
            content: '';
            display: block;
            position: absolute;
            left: -150px;
            top: 0;
            height: 100%;
            width: 150px;
            background: linear-gradient(to right, transparent 0%, #E8E8E8 50%, transparent 100%);
            animation: load 1s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
        }

        @keyframes load {
            from {
                left: -150px;
            }

            to {
                left: 100%;
            }
        }
    </style>
    <div id="wrapper">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="clearfix"></div>
                    <div class="panel_s mtop20">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="row-eq-height">
                                    <div class="col-md-6">
                                        <div id="checklogo">
                                            <?php echo payment_gateway_logo();
                                            ?>
                                        </div>
                                        <h4 class="bold invoice-html-number" id="textadj">
                                            <?php echo format_invoice_number($id); ?>
                                        </h4>
                                        <div id="hidemobile">
                                            <?php echo format_customer_info($data, 'invoice', 'billing'); ?>
                                            <h4 class="invoice-html-status mtop7" id="status-invoice">
                                                <?php echo format_invoice_status($status, '', true); ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="horizontal-scrollable-tabs preview-tabs-top" style="margin-bottom: 0px;">
                                            <div class="horizontal-tabs">
                                                <ul class="nav nav-tabs nav-tabs-horizontal mbot15" id="mytab" role="tablist">
                                                    <?php if ($pix == '1') { ?>
                                                        <li role="presentation" class="<?php echo $arr[0]; ?>">
                                                            <a href="#pix" aria-controls="pix" data-type="2" role="tab" data-toggle="tab"> PIX</a>
                                                        </li>
                                                    <?php }
                                                    if ($cartao == '1') { ?>
                                                        <li role="presentation" class="<?php echo $arr[1]; ?>">
                                                            <a href="#cartao" aria-controls="cartao" data-type="3" role="tab" data-toggle="tab">Cartão de Crédito</a>
                                                        </li>
                                                    <?php }
                                                    if ($boleto == '1') {
                                                    ?>
                                                        <li role="presentation" class="<?php echo $arr[2]; ?>">
                                                            <a href="#boleto" aria-controls="boleto" role="tab" data-type="1" data-toggle="tab">Boleto Bancário </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <?php
                                            if ($pix == '1') {
                                            ?>
                                                <div role="tabpanel" class="tab-pane ptop10 <?php echo $arr[0]; ?>" id="pix">
                                                    <div class="sc-hKizKw ceBZw" id="desktop">
                                                        <div data-cy="bankSlipContent" id="bank-slip" class="sc-gGiJkG jzdkxv">
                                                            <h4 style="text-align: center">
                                                                <strong>
                                                                    <svg id="icone_pix" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30.118 30.116" class="ame-logo-icon">
                                                                        <defs></defs>
                                                                        <g transform="translate(-103.72 -103.725)">
                                                                            <path class="a" d="M126.012,124.457a4.394,4.394,0,0,1-3.128-1.3l-4.534-4.533a.857.857,0,0,0-1.188,0l-4.515,4.516a4.4,4.4,0,0,1-3.13,1.3h-.543l5.737,5.736a4.572,4.572,0,0,0,6.471,0l5.721-5.72Zm-5.736,4.815a3.3,3.3,0,0,1-4.659,0l-3.965-3.963a5.708,5.708,0,0,0,1.9-1.258l4.2-4.207,4.223,4.223a5.666,5.666,0,0,0,2.149,1.352Z" transform="translate(0.832 2.322)"></path>
                                                                            <path class="a" d="M121.182,105.065a4.577,4.577,0,0,0-6.471,0l-5.737,5.736h.543a4.4,4.4,0,0,1,3.13,1.3l4.515,4.516a.841.841,0,0,0,1.188,0l4.534-4.535a4.4,4.4,0,0,1,3.128-1.3h.891Zm.8,6.11-4.223,4.222-4.206-4.206a5.7,5.7,0,0,0-1.9-1.259l3.965-3.963a3.3,3.3,0,0,1,4.659,0l3.853,3.853A5.655,5.655,0,0,0,121.98,111.176Z" transform="translate(0.832)"></path>
                                                                            <path class="a" d="M132.5,114.4l-3.433-3.433h-2.218a3.117,3.117,0,0,0-2.188.906l-4.534,4.534a2.172,2.172,0,0,1-3.066,0l-4.518-4.518a3.115,3.115,0,0,0-2.189-.906h-1.871l-3.417,3.417a4.571,4.571,0,0,0,0,6.469l3.417,3.417h1.871a3.116,3.116,0,0,0,2.189-.907l4.518-4.515a2.22,2.22,0,0,1,3.066,0l4.534,4.534a3.109,3.109,0,0,0,2.188.908h2.218l3.433-3.433A4.571,4.571,0,0,0,132.5,114.4Zm-16.346,3.557-4.516,4.518a1.833,1.833,0,0,1-1.282.533h-1.344l-3.042-3.043a3.3,3.3,0,0,1,0-4.66l3.042-3.043h1.341a1.833,1.833,0,0,1,1.285.532l4.516,4.518a3.962,3.962,0,0,0,.374.326A3.6,3.6,0,0,0,116.15,117.959Zm15.441,2.007-3.059,3.059h-1.688a1.825,1.825,0,0,1-1.283-.533l-4.534-4.534a3.344,3.344,0,0,0-.374-.321,3.962,3.962,0,0,0,.374-.326l4.534-4.534a1.83,1.83,0,0,1,1.283-.533h1.688l3.059,3.06a3.3,3.3,0,0,1,0,4.66Z" transform="translate(0 1.147)"></path>
                                                                        </g>
                                                                    </svg>Pagamento por PIX
                                                                </strong>
                                                            </h4>
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col-md-6 justify-content-center">
                                                                    <ul>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span><strong>1. Abra o app do seu banco e acesse o ambiente Pix.</strong></span>
                                                                        </li>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span><strong>2. escolha a opção pagar com qr code e escaneie o código ao
                                                                                    lado</strong></span>
                                                                        </li>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span>3. Confirme as informações e finalize o pagamento no seu
                                                                                APP.</span>
                                                                        </li>
                                                                    </ul>

                                                                    <div style="margin-top:40px;">
                                                                        <span style="display: block;margin-top:-1px; margin-left: auto; margin-right: auto; padding-top:11px;padding-bottom:10px;" class="label label-danger s-status invoice-status-1">Aguardando pagamento</span>
                                                                        <div style="margin-top:-7px;"><h2 style="float: left !important">Total:</h2>
                                                                        <h2 style="float: right !important">
                                                                            <strong>R$ <?php echo $total; ?></strong>
                                                                        </h2></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <div class="placeholder-item"></div>
                                                                        <img style="max-width: 200px;display: block;margin-left: auto;margin-right: auto;" class="get-img-qrcode" alt="" />
                                                                        <div class="col text-center">
                                                                            <input class="form-control input-get-qrcode" readonly style="width: 100%; margin-top: 5px" type="text" />
                                                                            <button style="margin-top: 10px; margin-bottom: 10px;" class="btn btn-info btn-copy-qrcode" type="button">
                                                                                Copiar Código
                                                                            </button>
                                                                        </div>
                                                                        <p style="font-size: 11px; margin-top: 10px; text-align: right">
                                                                            Pagamento intermediado por Gerencianet
                                                                            <img src="https://pbs.twimg.com/profile_images/882683146680102913/z-sH70yD_400x400.jpg" style="max-width: 9%; border-radius: 5px; margin-left: 4px" alt="" />
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-hKizKw ceBZw" id="mobile">
                                                        <div data-cy="bankSlipContent" id="bank-slip" class="sc-gGiJkG jzdkxv">
                                                            <h4 style="text-align: center">
                                                                <strong>
                                                                    <svg id="icone_pix" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30.118 30.116" class="ame-logo-icon">
                                                                        <defs></defs>
                                                                        <g transform="translate(-103.72 -103.725)">
                                                                            <path class="a" d="M126.012,124.457a4.394,4.394,0,0,1-3.128-1.3l-4.534-4.533a.857.857,0,0,0-1.188,0l-4.515,4.516a4.4,4.4,0,0,1-3.13,1.3h-.543l5.737,5.736a4.572,4.572,0,0,0,6.471,0l5.721-5.72Zm-5.736,4.815a3.3,3.3,0,0,1-4.659,0l-3.965-3.963a5.708,5.708,0,0,0,1.9-1.258l4.2-4.207,4.223,4.223a5.666,5.666,0,0,0,2.149,1.352Z" transform="translate(0.832 2.322)"></path>
                                                                            <path class="a" d="M121.182,105.065a4.577,4.577,0,0,0-6.471,0l-5.737,5.736h.543a4.4,4.4,0,0,1,3.13,1.3l4.515,4.516a.841.841,0,0,0,1.188,0l4.534-4.535a4.4,4.4,0,0,1,3.128-1.3h.891Zm.8,6.11-4.223,4.222-4.206-4.206a5.7,5.7,0,0,0-1.9-1.259l3.965-3.963a3.3,3.3,0,0,1,4.659,0l3.853,3.853A5.655,5.655,0,0,0,121.98,111.176Z" transform="translate(0.832)"></path>
                                                                            <path class="a" d="M132.5,114.4l-3.433-3.433h-2.218a3.117,3.117,0,0,0-2.188.906l-4.534,4.534a2.172,2.172,0,0,1-3.066,0l-4.518-4.518a3.115,3.115,0,0,0-2.189-.906h-1.871l-3.417,3.417a4.571,4.571,0,0,0,0,6.469l3.417,3.417h1.871a3.116,3.116,0,0,0,2.189-.907l4.518-4.515a2.22,2.22,0,0,1,3.066,0l4.534,4.534a3.109,3.109,0,0,0,2.188.908h2.218l3.433-3.433A4.571,4.571,0,0,0,132.5,114.4Zm-16.346,3.557-4.516,4.518a1.833,1.833,0,0,1-1.282.533h-1.344l-3.042-3.043a3.3,3.3,0,0,1,0-4.66l3.042-3.043h1.341a1.833,1.833,0,0,1,1.285.532l4.516,4.518a3.962,3.962,0,0,0,.374.326A3.6,3.6,0,0,0,116.15,117.959Zm15.441,2.007-3.059,3.059h-1.688a1.825,1.825,0,0,1-1.283-.533l-4.534-4.534a3.344,3.344,0,0,0-.374-.321,3.962,3.962,0,0,0,.374-.326l4.534-4.534a1.83,1.83,0,0,1,1.283-.533h1.688l3.059,3.06a3.3,3.3,0,0,1,0,4.66Z" transform="translate(0 1.147)"></path>
                                                                        </g>
                                                                    </svg>Pagamento por PIX
                                                                </strong>
                                                            </h4>
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col-md-12 justify-content-center">
                                                                    <ul>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span><strong>1. Copie o código</strong></span>
                                                                        </li>
                                                                        <div class="col text-center">
                                                                            <input class="form-control input-get-qrcode" readonly style="width: 100%; margin-top: 5px" type="text" />
                                                                            <button style="margin-top: 10px; margin-bottom: 10px;" class="btn btn-info btn-copy-qrcode" type="button">
                                                                                Copiar Código
                                                                            </button>
                                                                        </div>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span><strong>2. Abra o app do seu banco ou instituição financeira e
                                                                                    entre no ambiente Pix.</strong></span>
                                                                        </li>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span>3. Escolha a opção Pix copia e cola</span>
                                                                        </li>
                                                                        <li class="sc-bWNSNh ijsSky how-to pixx">
                                                                            <span>3. Cole o código, confira as informações e finalize a
                                                                                compra</span>
                                                                        </li>
                                                                    </ul>

                                                                    <div>
                                                                        <span style="display: block; margin-left: auto; margin-right: auto" class="label label-danger s-status invoice-status-1">Aguardando pagamento</span>
                                                                        <div>
                                                                            <h2 style="float: left !important">Total:</h2>
                                                                            <h2 style="float: right !important">
                                                                                <strong>R$ <?php echo $total; ?></strong>
                                                                            </h2>
                                                                        </div>
                                                                        <br />
                                                                        <br />
                                                                        <br />

                                                                        <p style="font-size: 11px; margin-top: 10px; text-align: center">
                                                                            Pagamento intermediado por Gerencianet
                                                                            <img src="https://pbs.twimg.com/profile_images/882683146680102913/z-sH70yD_400x400.jpg" style="max-width: 9%; border-radius: 5px; margin-left: 4px" alt="" />
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    window.addEventListener('load', function() {

                                                        const pixAtivo = true; // Tirar o comentário

                                                        const baseUrl = '<?php echo base_url() ?>';

                                                        if (pixAtivo) {
                                                            $('.btn-copy-qrcode').click(function() {
                                                                const _this = $(this);
                                                                _this.text('Copiado com sucesso.');
                                                                setTimeout(() => {
                                                                    _this.text('COPIAR CÓDIGO');
                                                                }, 1000);
                                                                const editor = document.getElementsByClassName('input-get-qrcode');
                                                                editor[0].select();
                                                                editor[0].focus();
                                                                editor[1].select();
                                                                editor[1].focus();
                                                                document.execCommand('copy');
                                                            })

                                                            $.post(`${baseUrl}gateways/gerencia_net/gerar_pix_por_javascript/${invoice_id}/${hash}`, function(response) {
                                                                try {

                                                                    const obj = JSON.parse(response);
                                                                    $('.placeholder-item').hide();

                                                                    $('.get-img-qrcode').attr("src", obj.imagemQrcode);

                                                                    $('.input-get-qrcode').val(obj.qrcode);

                                                                    const txid = obj.txid;

                                                                    setTimeout(() => {
                                                                        setInterval(() => {
                                                                            $.get(`<?php echo base_url() ?>gateways/gerencia_net/callback_check_pix_pago/${txid}/${invoice_id}`, function(response) {
                                                                                if (response == '1') {
                                                                                    $('.invoice-status-1').css({
                                                                                        color: "#fff",
                                                                                        border: 0,
                                                                                        background: '#2a9d8f'
                                                                                    }).text('Pagamento confirmado');
                                                                                    $('#status-invoice').find("span").removeClass('invoice-status-1 label-danger').addClass('invoice-status-2 label-success').html('PAGO');
                                                                                }
                                                                            });
                                                                        }, 5000);
                                                                    }, 15000);
                                                                } catch (error) {
                                                                    console.error(error.toString());
                                                                }
                                                            });
                                                        }
                                                    });
                                                </script>
                                            <?php
                                            }
                                            if ($cartao == '1') {

                                            ?>
                                                <style>
                                                    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500');

                                                    * {
                                                        margin: 0;
                                                        box-sizing: border-box;
                                                    }

                                                    html {
                                                        --card-color: #cacaca;
                                                        --text-color: #e1e1e1;
                                                    }

                                                    body {
                                                        font-family: 'Roboto', sans-serif;
                                                    }

                                                    .container-credit-card {
                                                        display: flex;
                                                        flex-direction: column;
                                                        align-items: center;
                                                        margin: 0px auto;
                                                        top: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        right: 0;
                                                        padding: 0;
                                                        position: relative;
                                                    }

                                                    .container-credit-card .col1 {
                                                        perspective: 1000;
                                                        transform-style: preserve-3d;
                                                    }

                                                    .container-credit-card .col2 {
                                                        /* border:1px solid red; */
                                                        width: 400px;
                                                        margin: 0px auto;
                                                    }

                                                    .container-credit-card .col1 .card {
                                                        position: relative;
                                                        width: 420px;
                                                        height: 250px;
                                                        margin-bottom: 20px;
                                                        margin-right: 10px;
                                                        border-radius: 17px;
                                                        box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.1);
                                                        transition: all 1s;
                                                        transform-style: preserve-3d;
                                                    }

                                                    .container-credit-card .col1 .card .front {
                                                        position: absolute;
                                                        background: var(--card-color);
                                                        border-radius: 17px;
                                                        padding: 50px;
                                                        width: 100%;
                                                        height: 100%;
                                                        transform: translateZ(1px);
                                                        -webkit-transform: translateZ(1px);
                                                        transition: background 0.3s;
                                                        z-index: 50;
                                                        background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
                                                        -webkit-backface-visibility: hidden;
                                                        -moz-backface-visibility: hidden;
                                                        -ms-backface-visibility: hidden;
                                                        backface-visibility: hidden;
                                                    }

                                                    .container-credit-card .col1 .card .front .type {
                                                        position: absolute;
                                                        width: 75px;
                                                        height: 45px;
                                                        top: 20px;
                                                        right: 20px;
                                                    }

                                                    .container-credit-card .col1 .card .front .type img {
                                                        width: 100%;
                                                        float: right;
                                                    }

                                                    .container-credit-card .col1 .card .front .card_number {
                                                        position: absolute;
                                                        font-size: 26px;
                                                        font-weight: 500;
                                                        letter-spacing: -1px;
                                                        top: 110px;
                                                        color: var(--text-color);
                                                        word-spacing: 3px;
                                                        transition: color 0.5s;
                                                    }

                                                    .container-credit-card .col1 .card .front .date {
                                                        position: absolute;
                                                        bottom: 40px;
                                                        right: 55px;
                                                        width: 90px;
                                                        height: 35px;
                                                        color: var(--text-color);
                                                        transition: color 0.5s;
                                                    }

                                                    .container-credit-card .col1 .card .front .date .date_value {
                                                        font-size: 12px;
                                                        position: absolute;
                                                        margin-left: 22px;
                                                        margin-top: 12px;
                                                        color: var(--text-color);
                                                        font-weight: 500;
                                                        transition: color 0.5s;
                                                    }

                                                    .container-credit-card .col1 .card .front .date:after {
                                                        content: 'MONTH / YEAR';
                                                        position: absolute;
                                                        display: block;
                                                        font-size: 7px;
                                                        margin-left: 20px;
                                                    }

                                                    .container-credit-card .col1 .card .front .date:before {
                                                        content: 'valid \a thru';
                                                        position: absolute;
                                                        display: block;
                                                        font-size: 8px;
                                                        white-space: pre;
                                                        margin-top: 8px;
                                                    }

                                                    .container-credit-card .col1 .card .front .fullname {
                                                        position: absolute;
                                                        font-size: 20px;
                                                        bottom: 40px;
                                                        color: var(--text-color);
                                                        transition: color 0.5s;
                                                    }

                                                    .container-credit-card .col1 .card .back {
                                                        position: absolute;
                                                        width: 100%;
                                                        border-radius: 17px;
                                                        height: 100%;
                                                        background: var(--card-color);
                                                        transform: rotateY(180deg);
                                                    }

                                                    .container-credit-card .col1 .card .back .magnetic {
                                                        position: absolute;
                                                        width: 100%;
                                                        height: 50px;
                                                        background: rgba(0, 0, 0, 0.7);
                                                        margin-top: 25px;
                                                    }

                                                    .container-credit-card .col1 .card .back .bar {
                                                        position: absolute;
                                                        width: 80%;
                                                        height: 37px;
                                                        background: rgba(255, 255, 255, 0.7);
                                                        left: 10px;
                                                        margin-top: 100px;
                                                    }

                                                    .container-credit-card .col1 .card .back .seccode {
                                                        font-size: 13px;
                                                        color: var(--text-color);
                                                        font-weight: 500;
                                                        position: absolute;
                                                        top: 100px;
                                                        right: 40px;
                                                    }

                                                    .container-credit-card .col1 .card .back .chip {
                                                        bottom: 45px;
                                                        left: 10px;
                                                    }

                                                    .container-credit-card .col1 .card .back .disclaimer {
                                                        position: absolute;
                                                        width: 65%;
                                                        left: 80px;
                                                        color: #f1f1f1;
                                                        font-size: 8px;
                                                        bottom: 55px;
                                                    }

                                                    .container-credit-card .col2 input,
                                                    .container-credit-card .col2 select {
                                                        display: block;
                                                        width: 100%;
                                                        height: 30px;
                                                        padding-left: 10px;
                                                        padding-top: 3px;
                                                        padding-bottom: 3px;
                                                        margin-top: 7px;
                                                        margin-bottom: 7px;
                                                        font-size: 17px;
                                                        border-radius: 20px;
                                                        background: rgba(0, 0, 0, 0.05);
                                                        border: none;
                                                        transition: background 0.5s;
                                                    }

                                                    .container-credit-card .col2 input:focus {
                                                        outline-width: 0;
                                                        background: rgba(31, 134, 252, 0.15);
                                                        transition: background 0.5s;
                                                    }

                                                    .container-credit-card .col2 label {
                                                        padding-left: 8px;
                                                        font-size: 15px;
                                                        color: #444;
                                                    }

                                                    .container-credit-card .col2 .ccv {
                                                        width: 40%;
                                                    }

                                                    .container-credit-card .col2 .buy {
                                                        width: 100%;
                                                        height: 50px;
                                                        position: relative;
                                                        display: block;
                                                        margin: 20px auto;
                                                        border-radius: 10px;
                                                        border: none;
                                                        background: #42c2df;
                                                        color: white;
                                                        font-size: 20px;
                                                        transition: background 0.4s;
                                                        cursor: pointer;
                                                    }

                                                    .container-credit-card .col2 .buy i {
                                                        font-size: 20px;
                                                    }

                                                    .container-credit-card .col2 .buy:hover {
                                                        background: #3594a9;
                                                        transition: background 0.4s;
                                                    }

                                                    .chip {
                                                        position: absolute;
                                                        width: 55px;
                                                        height: 40px;
                                                        background: #bbb;
                                                        border-radius: 7px;
                                                    }

                                                    .chip:after {
                                                        content: '';
                                                        display: block;
                                                        width: 35px;
                                                        height: 25px;
                                                        border-radius: 4px;
                                                        position: absolute;
                                                        top: 0;
                                                        bottom: 0;
                                                        margin: auto;
                                                        background: #ddd;
                                                    }
                                                </style>
                                                <div role="tabpanel" class="tab-pane ptop10 <?php echo $arr[1]; ?>" id="cartao">
                                                    <div class="sc-hKizKw ceBZw">
                                                        <div data-cy="bankSlipContent" id="bank-slip" class="sc-gGiJkG jzdkxv">
                                                            <h4 style="text-align: center;"><strong><svg id="credit_card" xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 26.667 17.332" class="payment-icon">
                                                                        <path id="credit_card-2" data-name="credit_card" d="M2.333,17.332A2.335,2.335,0,0,1,0,15V2.333A2.335,2.335,0,0,1,2.333,0h22a2.335,2.335,0,0,1,2.333,2.333V15a2.335,2.335,0,0,1-2.333,2.333ZM2,15a.333.333,0,0,0,.332.334h22A.333.333,0,0,0,24.667,15V8.667H2ZM24.667,4.666V2.333A.333.333,0,0,0,24.334,2h-22A.333.333,0,0,0,2,2.333V4.666Zm-7,8.667a1,1,0,1,1,0-2h4a1,1,0,0,1,0,2Z"></path>
                                                                    </svg>Pagamento por Cartão de Crédito</strong></h4>

                                                            <div>
                                                                <div class="container-credit-card">
                                                                    <div class="col1">
                                                                        <div class="card">
                                                                            <div class="front">
                                                                                <div class="type">
                                                                                    <img class="bankid" />
                                                                                </div>
                                                                                <span class="chip"></span>
                                                                                <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                                                                                <div class="date"><span class="date_value">MM / YYYY</span></div>
                                                                                <span class="fullname">FULL NAME</span>
                                                                            </div>
                                                                            <div class="back">
                                                                                <div class="magnetic"></div>
                                                                                <div class="bar"></div>
                                                                                <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                                                                                <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <form id="form-cartao" method="post">
                                                                            <h4 style="text-align: center;"><strong>Dados do cartão</strong></h4>
                                                                            <div>
                                                                                <label>Selecione a bandeira</label><br />
                                                                                <select name="brand">
                                                                                    <option value="visa" seleted>Visa</option>
                                                                                    <option value="mastercard">MasterCard</option>
                                                                                    <option value="diners">Dinners</option>
                                                                                    <option value="amex">AmericanExpress</option>
                                                                                    <option value="elo">Elo</option>
                                                                                    <option value="hipercard">Hipercard</option>
                                                                                </select>
                                                                            </div>
                                                                            <label>Número do cartão</label>
                                                                            <input class="number" type="text" name="c_number" ng-model="ncard" required maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                                                            <label>Nome como impresso no cartão</label>
                                                                            <input class="inputname" name="" type="text" placeholder="" required />
                                                                            <label>Validade</label>
                                                                            <input class="expire" type="text" placeholder="MM/YYYY" name="expiration" required />
                                                                            <label>Código de segurança do cartão (CVV)</label>
                                                                            <input class="ccv" type="text" name="cvv" placeholder="CVC" maxlength="3" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                                                            <h4 style="text-align: center;"><strong>Dados do pagador</strong></h4>

                                                                            <label>Nome</label>
                                                                            <input type="text" name="name" required />
                                                                            <label>CPF <sup>(sem pontos, vírgulas ou hífen)</sup></label>
                                                                            <input type="number" name="cpf" maxlength="11" required />
                                                                            <label>Data de nascimento</label>
                                                                            <input type="date" placeholder="DD/MM/YYYY" name="birth" required />

                                                                            <label>Email</label>
                                                                            <input type="email" name="email" required />
                                                                            <button class="buy">Pagar Agora</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <h2 style="float: left !important">Total:</h2>
                                                                <h2 style="float: right !important"><strong>R$ <?php echo $total; ?></strong></h2>
                                                                <p class="textadj" style="font-size: 12px; padding-top: 10px">
                                                                    Pagamento intermediado por Gerencianet
                                                                    <img src="https://pbs.twimg.com/profile_images/882683146680102913/z-sH70yD_400x400.jpg" style="max-width: 4%; border-radius: 5px; margin-left: 4px" alt="" />
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    const identificadorConta = '<?php echo $identificador_conta; ?>';
                                                    var s = document.createElement('script');
                                                    s.type = 'text/javascript';
                                                    var v = parseInt(Math.random() * 1000000);

                                                    <?php
                                                    if ($test_mode_enabled == '1') { //Teste
                                                    ?>const url = `https://sandbox.gerencianet.com.br/v1/cdn/${identificadorConta}/`;
                                                    <?php
                                                    } else {
                                                    ?>const url = `https://api.gerencianet.com.br/v1/cdn/${identificadorConta}/`;
                                                    <?php
                                                    }
                                                    ?>

                                                    s.src = url + v;
                                                    s.async = false;
                                                    s.id = identificadorConta.toString();

                                                    if (!document.getElementById(identificadorConta)) {
                                                        document.getElementsByTagName('head')[0].appendChild(s);
                                                    };

                                                    $gn = {
                                                        validForm: true,
                                                        processed: false,
                                                        done: {},
                                                        ready: function(fn) {
                                                            $gn.done = fn;
                                                        }
                                                    };

                                                    $gn.ready(function(checkout) {

                                                        const formCartaoCredito = document.getElementById('form-cartao');

                                                        const baseUrl = '<?php echo base_url() ?>';

                                                        formCartaoCredito.addEventListener('submit', event => {
                                                            event.preventDefault();
                                                            $('.buy').html('Processando, aguarde um instante...').attr('disabled', true)
                                                            try {
                                                                const {
                                                                    c_number,
                                                                    cpf,
                                                                    birth,
                                                                    expiration,
                                                                    cvv,
                                                                    name,
                                                                    email,
                                                                    brand
                                                                } = event.target.elements;
                                                                const [mes, ano] = expiration.value.split('/').map(el => el.trim());
                                                                var callback = function(error, response) {
                                                                    if (error) {
                                                                        alert('Alert 1\n' + error.error_description);
                                                                    } else {
                                                                        $.ajax({
                                                                            url: `${baseUrl}gateways/gerencia_net/gerar_cartao_credito/${invoice_id}/${hash}`,
                                                                            data: {
                                                                                nome_cliente: name.value,
                                                                                cpf: cpf.value,
                                                                                payament_token: response.data.payment_token,
                                                                                birth: birth.value,
                                                                                email: email.value
                                                                            },
                                                                            type: 'post',
                                                                            dataType: 'json',
                                                                            success: function(resposta) {
                                                                                if (resposta.code == 200) {
                                                                                    alert('Alert 2\n' + JSON.stringify(resposta));
                                                                                } else {
                                                                                    if (resposta.erro) {
                                                                                        alert(resposta.message)
                                                                                    } else {
                                                                                        if (resposta.message == 'success') {
                                                                                            alert('Operação realizada com sucesso.');
                                                                                        } else {
                                                                                            alert('Ops! Não foi possível realizar esta operação.');
                                                                                        }
                                                                                    }
                                                                                }
                                                                                $('.buy').html('Pagar agora').attr('disabled', false)
                                                                            },
                                                                            error: function(resposta) {
                                                                                if (resposta.erro) {
                                                                                    alert(resposta.message)
                                                                                } else {
                                                                                    if (resposta.message == 'success') {
                                                                                        alert('Operação realizada com sucesso.');
                                                                                    } else {
                                                                                        alert('Ops! Não foi possível realizar esta operação.');
                                                                                    }
                                                                                }
                                                                                $('.buy').html('Pagar agora').attr('disabled', false)
                                                                            }
                                                                        });

                                                                    }
                                                                };
                                                                checkout.getPaymentToken({
                                                                    brand: brand.options[brand.selectedIndex].value, // bandeira do cartão
                                                                    number: +c_number.value.toString().replace(/\D+/g, ""), // número do cartão
                                                                    cvv: cvv.value.toString(), // código de segurança
                                                                    expiration_month: mes, // mês de vencimento
                                                                    expiration_year: ano // ano de vencimento
                                                                }, callback);
                                                            } catch (error) {
                                                                alert('Alert 5\n' + error.toString());
                                                            }
                                                        });
                                                    });


                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        $(function() {

                                                            var cards = [{
                                                                nome: "mastercard",
                                                                colore: "#0061A8",
                                                                src: "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
                                                            }, {
                                                                nome: "visa",
                                                                colore: "#E2CB38",
                                                                src: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2000px-Visa_Inc._logo.svg.png"
                                                            }, {
                                                                nome: "dinersclub",
                                                                colore: "#888",
                                                                src: "http://www.worldsultimatetravels.com/wp-content/uploads/2016/07/Diners-Club-Logo-1920x512.png"
                                                            }, {
                                                                nome: "americanExpress",
                                                                colore: "#108168",
                                                                src: "https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/American_Express_logo.svg/600px-American_Express_logo.svg.png"
                                                            }, {
                                                                nome: "discover",
                                                                colore: "#86B8CF",
                                                                src: "https://lendedu.com/wp-content/uploads/2016/03/discover-it-for-students-credit-card.jpg"
                                                            }, {
                                                                nome: "dankort",
                                                                colore: "#0061A8",
                                                                src: "https://upload.wikimedia.org/wikipedia/commons/5/51/Dankort_logo.png"
                                                            }];

                                                            var month = 0;
                                                            var html = document.getElementsByTagName('html')[0];
                                                            var number = "";

                                                            var selected_card = -1;

                                                            $(document).click(function(e) {
                                                                if (!$(e.target).is(".ccv") || !$(e.target).closest(".ccv").length) {
                                                                    $(".card").css("transform", "rotatey(0deg)");
                                                                    $(".seccode").css("color", "var(--text-color)");
                                                                }
                                                                if (!$(e.target).is(".expire") || !$(e.target).closest(".expire").length) {
                                                                    $(".date_value").css("color", "var(--text-color)");
                                                                }
                                                                if (!$(e.target).is(".number") || !$(e.target).closest(".number").length) {
                                                                    $(".card_number").css("color", "var(--text-color)");
                                                                }
                                                                if (!$(e.target).is(".inputname") || !$(e.target).closest(".inputname").length) {
                                                                    $(".fullname").css("color", "var(--text-color)");
                                                                }
                                                            });


                                                            // Card number input
                                                            $(".number").keyup(function(event) {
                                                                $(".card_number").text($(this).val());
                                                                number = $(this).val();

                                                                if (parseInt(number.substring(0, 2)) > 50 && parseInt(number.substring(0, 2)) < 56) {
                                                                    selected_card = 0;
                                                                } else if (parseInt(number.substring(0, 1)) == 4) {
                                                                    selected_card = 1;
                                                                } else if (parseInt(number.substring(0, 2)) == 36 || parseInt(number.substring(0, 2)) == 38 || parseInt(number.substring(0, 2)) == 39) {
                                                                    selected_card = 2;
                                                                } else if (parseInt(number.substring(0, 2)) == 34 || parseInt(number.substring(0, 2)) == 37) {
                                                                    selected_card = 3;
                                                                } else if (parseInt(number.substring(0, 2)) == 65) {
                                                                    selected_card = 4;
                                                                } else if (parseInt(number.substring(0, 4)) == 5019) {
                                                                    selected_card = 5;
                                                                } else {
                                                                    selected_card = -1;
                                                                }

                                                                if (selected_card != -1) {
                                                                    html.setAttribute("style", "--card-color: " + cards[selected_card].colore);
                                                                    $(".bankid").attr("src", cards[selected_card].src).show();
                                                                } else {
                                                                    html.setAttribute("style", "--card-color: #cecece");
                                                                    $(".bankid").attr("src", "").hide();
                                                                }

                                                                if ($(".card_number").text().length === 0) {
                                                                    $(".card_number").html("&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF;");
                                                                }

                                                            }).focus(function() {
                                                                $(".card_number").css("color", "white");
                                                            }).on("keydown input", function() {

                                                                $(".card_number").text($(this).val());

                                                                if (event.key >= 0 && event.key <= 9) {
                                                                    if ($(this).val().length === 4 || $(this).val().length === 9 || $(this).val().length === 14) {
                                                                        $(this).val($(this).val() + " ");
                                                                    }
                                                                }
                                                            })

                                                            // Name Input
                                                            $(".inputname").keyup(function() {
                                                                $(".fullname").text($(this).val());
                                                                if ($(".inputname").val().length === 0) {
                                                                    $(".fullname").text("FULL NAME");
                                                                }
                                                                return event.charCode;
                                                            }).focus(function() {
                                                                $(".fullname").css("color", "white");
                                                            });

                                                            // Security code Input
                                                            $(".ccv").focus(function() {
                                                                $(".card").css("transform", "rotatey(180deg)");
                                                                $(".seccode").css("color", "white");
                                                            }).keyup(function() {
                                                                $(".seccode").text($(this).val());
                                                                if ($(this).val().length === 0) {
                                                                    $(".seccode").html("&#x25CF;&#x25CF;&#x25CF;");
                                                                }
                                                            }).focusout(function() {
                                                                $(".card").css("transform", "rotatey(0deg)");
                                                                $(".seccode").css("color", "var(--text-color)");
                                                            });

                                                            // Date expire input
                                                            $(".expire").keypress(function(event) {
                                                                if (event.charCode >= 48 && event.charCode <= 57) {
                                                                    if ($(this).val().length === 1) {
                                                                        $(this).val($(this).val() + event.key + " / ");
                                                                    } else if ($(this).val().length === 0) {
                                                                        if (event.key == 1 || event.key == 0) {
                                                                            month = event.key;
                                                                            return event.charCode;
                                                                        } else {
                                                                            $(this).val(0 + event.key + " / ");
                                                                        }
                                                                    } else if ($(this).val().length > 2 && $(this).val().length < 9) {
                                                                        return event.charCode;
                                                                    }
                                                                }
                                                                return false;
                                                            }).keyup(function(event) {
                                                                $(".date_value").html($(this).val());
                                                                if (event.keyCode == 8 && $(".expire").val().length == 4) {
                                                                    $(this).val(month);
                                                                }

                                                                if ($(this).val().length === 0) {
                                                                    $(".date_value").text("MM / YYYY");
                                                                }
                                                            }).keydown(function() {
                                                                $(".date_value").html($(this).val());
                                                            }).focus(function() {
                                                                $(".date_value").css("color", "white");
                                                            });
                                                        });
                                                    })
                                                </script>
                                            <?php
                                            }
                                            if ($boleto == '1') {
                                            ?>
                                                <div role="tabpanel" class="tab-pane ptop10 <?php echo $arr[2]; ?>" id="boleto">
                                                    <div class="sc-hKizKw ceBZw">
                                                        <div data-cy="bankSlipContent" id="bank-slip" class="sc-gGiJkG jzdkxv">
                                                            <h4 style="text-align: center;"><strong><svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 28.633 19.652" class="payment-icon">
                                                                        <g id="barcode" transform="translate(0.5 0.5)">
                                                                            <path id="barcode-2" data-name="barcode" d="M2.763,18.652a2.739,2.739,0,0,1-2.029-.761A2.908,2.908,0,0,1,0,15.814V2.838A2.909,2.909,0,0,1,.735.761,2.741,2.741,0,0,1,2.763,0H24.87A2.741,2.741,0,0,1,26.9.761a2.909,2.909,0,0,1,.735,2.077V15.814a2.909,2.909,0,0,1-.735,2.077,2.741,2.741,0,0,1-2.029.761Zm-.69-15.88V15.88c.009.563.145.7.69.7H24.87c.562,0,.691-.143.691-.766V2.838c0-.605-.124-.755-.632-.765H2.7C2.212,2.083,2.082,2.226,2.073,2.773Zm20.08,11.735V4.145h.99a.345.345,0,0,1,.345.345v9.671a.346.346,0,0,1-.345.345Zm-2.571,0V4.145h2.063V14.507Zm-3.438,0V4.145h2.631V14.507Zm-2.7,0V4.145h1.694V14.507Zm-3.617,0V4.145h2.651V14.507Zm-2.481,0V4.145h.927V14.507Zm-2.853,0a.345.345,0,0,1-.345-.345V4.491a.345.345,0,0,1,.345-.345H5.769V14.507Z" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"></path>
                                                                        </g>
                                                                    </svg>Pagamento por Boleto Bancário</strong></h4>
                                                            <ul>
                                                                <li class="sc-bWNSNh ijsSky how-to">
                                                                    <svg id="icon-print-rounded" viewBox="0 0 64 64">
                                                                        <path fill="#666" d="M 32 0 A 32 32 0 0 0 0 32 A 32 32 0 0 0 32 64 A 32 32 0 0 0 64 32 A 32 32 0 0 0 32 0 z M 20 14 L 44 14 L 44 21 L 20 21 L 20 14 z M 16.5 23 L 47.5 23 C 49.4 23 51 24.6 51 26.5 L 51 41.5 C 51 43.4 49.4 45 47.5 45 L 46 45 L 46 30 L 18 30 L 18 45 L 16.5 45 C 14.6 45 13 43.4 13 41.5 L 13 26.5 C 13 24.6 14.6 23 16.5 23 z M 21 33 L 43 33 L 43 52 L 21 52 L 21 33 z M 23 36 L 23 37 L 41 37 L 41 36 L 23 36 z M 23 39 L 23 40 L 41 40 L 41 39 L 23 39 z M 23 42 L 23 43 L 41 43 L 41 42 L 23 42 z M 23 45 L 23 46 L 41 46 L 41 45 L 23 45 z M 23 48 L 23 49 L 41 49 L 41 48 L 23 48 z ">
                                                                        </path>
                                                                    </svg><span>Imprima o boleto e <strong>pague no banco</strong></span>
                                                                </li>
                                                                <li class="sc-bWNSNh ijsSky how-to">
                                                                    <svg id="icon-barcode-rounded" viewBox="0 0 64 64">
                                                                        <path fill="#666" d="M 32 0 A 32 32 0 0 0 0 32 A 32 32 0 0 0 32 64 A 32 32 0 0 0 64 32 A 32 32 0 0 0 32 0 z M 15.7 16 L 49.3 16 C 50.8 16 52 17.2 52 18.7 L 52 20 L 49 20 L 49 19.9 C 49 19.4 48.6 19 48.1 19 L 16.9 19 C 16.4 19 16 19.4 16 19.9 L 16 38.1 C 16 38.6 16.4 39 16.9 39 L 48.1 39 C 48.6 39 49 38.6 49 38.1 L 49 37 L 52 37 L 52 39.3 C 52 40.8 50.8 42 49.3 42 L 15.7 42 C 14.2 42 13 40.8 13 39.3 L 13 18.7 C 13 17.2 14.2 16 15.7 16 z M 36 22 L 57 22 L 57 35 L 36 35 L 36 22 z M 39 24 L 39 33 L 41 33 L 41 24 L 39 24 z M 43 24 L 43 33 L 44 33 L 44 24 L 43 24 z M 45 24 L 45 33 L 46 33 L 46 24 L 45 24 z M 48 24 L 48 33 L 50 33 L 50 24 L 48 24 z M 52 24 L 52 33 L 53 33 L 53 24 L 52 24 z M 54 24 L 54 33 L 55 33 L 55 24 L 54 24 z M 10 44 L 28 44 C 28 44.6 28.4 45 29 45 L 37 45 C 37.5 45 38 44.6 38 44 L 54 44 C 54.6 44 54.8 44.4 54.5 44.9 L 53.4 47.1 C 53.2 47.6 52.5 48 52 48 L 12 48 C 11.5 48 10.8 47.6 10.6 47.1 L 9.5 44.9 C 9.2 44.4 9.5 44 10 44 z M 50 45 C 49.4 45 49 45.4 49 46 C 49 46.6 49.4 47 50 47 C 50.6 47 51 46.6 51 46 C 51 45.4 50.6 45 50 45 z ">
                                                                        </path>
                                                                    </svg><span><strong>ou pague pela internet</strong> utilizando o código de
                                                                        barras do boleto</span>
                                                                </li>

                                                            </ul>
                                                            <div style="margin-top: 30px !important">
                                                                <div>
                                                                    <h2 style="float: left !important">Total:</h2>
                                                                    <h2 style="float: right !important"><strong>R$ <?php echo $total; ?></strong></h2>
                                                                </div>

                                                                <button class="btn btn-info btn-block" form="form-pagamento">Gerar boleto</button>
                                                                <p class="textadj" style="font-size: 12px; padding-top: 10px">
                                                                    Pagamento intermediado por Gerencianet
                                                                    <img src="https://pbs.twimg.com/profile_images/882683146680102913/z-sH70yD_400x400.jpg" style="max-width: 4%; border-radius: 5px; margin-left: 4px" alt="" />
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="post" id="form-pagamento">
        <input type="hidden" name="gerencianet_pagamento_input_tipo" id="id_pagamento_gerencianet_input_tipo" class="pagamento_gerencianet_input_tipo_class" value="<?php echo  $arr[3]; ?>">
    </form>
    <?php echo payment_gateway_scripts(); ?>
    <script>
        $(document).ready(function() {
            $('#mytab>li>a').on('click', function() {
                const _this = $(this);
                const tipo = _this.attr("data-type");
                $('#id_pagamento_gerencianet_input_tipo').val(tipo);
            });
        })
    </script>
</body>

</html>