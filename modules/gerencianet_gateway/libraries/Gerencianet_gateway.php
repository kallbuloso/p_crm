<?php
ob_start();
/**
 * Gerencianet Perfex CRM
 * @version 1.0
 * @autor Allan Lima <contato@allanlima.com>
 * @website www.allanlima.com
 */

defined('BASEPATH') or exit('No direct script access allowed');

require __DIR__ . '../../../../modules/gerencianet_gateway/vendor/autoload.php';

class Gerencianet_gateway extends App_gateway
{
	protected $ci;

	public function __construct()
	{
		parent::__construct();

		$this->setId('gerencianet');

		$this->setName('Gerencianet');

		$this->setSettings([
			[
				'name'      => 'aplicacao_nome_gerencianet',
				'encrypted' => true,
				'label'     => 'Nome da Aplicação no Gerência NET',
			],[
				'name'      => 'production_client_id',
				'encrypted' => true,
				'label'     => 'Produção Client ID',
			],
			[
				'name'      => 'production_client_secret',
				'encrypted' => true,
				'label'     => 'Produção Client Secret',
			],
			[
				'name'      => 'dev_client_id',
				'encrypted' => true,
				'label'     => 'Dev Client ID',
			],
			[
				'name'      => 'dev_client_secret',
				'encrypted' => true,
				'label'     => 'Dev Client Secret',
			],
			[
				'name'          => 'check_billet',
				'type'          => 'yes_no',
				'default_value' => 1,
				'label'         => 'Verificar boleto existente, caso positivo, redirecionar, do contrário um novo será gerado',
			],
			[
				'name'          => 'description_dashboard',
				'label'         => 'settings_paymentmethod_description',
				'type'          => 'textarea',
				'default_value' => 'Payment for Invoice {invoice_number}',
			],
			[
				'name'          => 'currencies',
				'label'         => 'currency',
				'default_value' => 'BRL'
			],
			[
				'name'          => 'test_mode_enabled',
				'type'          => 'yes_no',
				'default_value' => 1,
				'label'         => 'settings_paymentmethod_testing_mode',
			], [
				'name'          => 'codigo_identificador_conta',
				'label'         => 'Código identificador da conta',
				'encrypted' => true,
			],
			[
				'name'          => 'tipo_pagamento_pix',
				'label'         => 'PIX',
				'type'			=> 'yes_no',
				'default_value' => 0,
			], [
				'name'          => 'pagamento_pix_chave',
				'label'         => 'CHAVE'
			], [
				'name'          => 'tipo_pagamento_pix_certificado_pem_producao',
				'label'         => 'Produção - Caminho do Certificado PEM <span style="color:green;">(Obtido no painel do gerência net)</span>',
				'type'			=> 'input'
			], [
				'name'          => 'tipo_pagamento_pix_certificado_pem_homologacao',
				'label'         => 'Dev - Caminho do Certificado PEM <span style="color:green;">(Obtido no painel do gerência net)</span>',
				'type'			=> 'input'
			],
			[
				'name'          => 'tipo_pagamento_cartaocredito',
				'label'         => 'Cartão de crédito',
				'type'			=> 'yes_no',
				'default_value' => 0,
			], [
				'name'          => 'tipo_pagamento_boleto',
				'label'         => 'Boleto',
				'type'			=> 'yes_no',
				'default_value' => 0,
			],
		]);

		/**
		 * REQUIRED
		 * Hook gateway with other online payment modes
		 */

		hooks()->add_action('before_add_online_payment_modes', [$this, 'initMode']);

		$CI = &get_instance();

		$this->ci = $CI;
	}

	public function process_payment($data)
	{
		redirect(site_url('gateways/gerencia_net/invoice/' . $data['invoice']->id . '/' . $data['hash']));
	}
}
