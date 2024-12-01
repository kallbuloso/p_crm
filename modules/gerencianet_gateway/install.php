<?php

defined('BASEPATH') or exit('No direct script access allowed');

add_option('gerencianet_gateway', 'enable');

function copiar_arquivos(
    string $filename_source,
    string $filename_dest
) {
    if(file_exists($filename_dest)){
        unlink($filename_dest);
    }
    copy($filename_source, $filename_dest);
}

copiar_arquivos('modules/gerencianet_gateway/controllers/Gerencia_net.php', 'application/controllers/gateways/Gerencia_net.php');
copiar_arquivos('modules/gerencianet_gateway/libraries/Gerencianet_gateway.php', 'application/libraries/gateways/Gerencianet_gateway.php');