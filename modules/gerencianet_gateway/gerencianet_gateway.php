<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Gerencia Net
Description: Gerência Net Payment Gateway module, api PIX, boleto e cartão de crédito
Version: 1.0.0
Requires at least: 1.0.*
Author: Taffarel Xavier
Author URI: https://meunegociosocial.com/produto/pre-venda-modulo-gerencianet-para-perfex-crm-pix-boleto-e-cartao
*/

define('GERENCIANET_GATEWAY_MODULE_NAME', 'gerencianet_gateway');

$CI = &get_instance();

/**
 * Load the module helper
 */

$CI->load->helper(GERENCIANET_GATEWAY_MODULE_NAME . '/gerencianet_gateway');

/**
 * Register activation module hook
 */
register_activation_hook(GERENCIANET_GATEWAY_MODULE_NAME, 'gerencianet_gateway_activation_hook');

function gerencianet_gateway_activation_hook()
{
    require_once(__DIR__ . '/install.php');
}


/**
 * Register language files, must be registered if the module is using languages
 */
// register_language_files(GERENCIANET_GATEWAY_MODULE_NAME, [GERENCIANET_GATEWAY_MODULE_NAME]);

/**
 * Actions for inject the custom styles
 */
hooks()->add_filter('module_gerencianet_gateway_action_links', 'module_gerencianet_gateway_action_links');

/**
 * Add additional settings for this module in the module list area
 * @param  array $actions current actions
 * @return array
 */
function module_gerencianet_gateway_action_links($actions)
{
    $actions[] = '<a href="' . admin_url('settings?group=payment_gateways&tab=online_payments_gerencianet_tab') . '">' . _l('settings') . '</a>';

    return $actions;
}

hooks()->add_action('admin_init', 'my_module_init_menu_items');
function my_module_init_menu_items()
{
    $CI = &get_instance();
    $CI->app_menu->add_setup_menu_item(GERENCIANET_GATEWAY_MODULE_NAME . '-menu-id', [
        'name'     => "Converter .P12 para .PEM",
        // 'collapse' => true,
        'position' => 35,
        'href'     => base_url('/gateways/gerencia_net/view_converter_certificado_p12_para_pem')/*'../gateways/gerencia_net/view_converter_certificado_p12_para_pem'*/, // URL of the item
    ]);
}

/**
 * Delete all email builder options on uninstall
 */
register_uninstall_hook(GERENCIANET_GATEWAY_MODULE_NAME, 'gerencia_net_uninstall_hook');
function gerencia_net_uninstall_hook()
{

    // if (file_exists('application/libraries/gateways/Gerencianet_gateway.php')) {
        unlink('application/libraries/gateways/Gerencianet_gateway.php');
    // } 
}

register_payment_gateway('gerencianet_gateway', 'gerencianet_gateway');
