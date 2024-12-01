<?php

defined('BASEPATH') or exit('No direct script access allowed');

function copiar_arquivos(
    string $filename_dest
) {
    unlink($filename_dest);
}

function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") rrmdir($dir . "/" . $object);
                else unlink($dir . "/" . $object);
            }
        }
        reset($objects);
        rmdir($dir);
    }
}

rrmdir('modules/gerencianet_gateway');
copiar_arquivos('application/controllers/gateways/Gerencia_net.php');
copiar_arquivos('application/libraries/gateways/Gerencianet_gateway.php');
