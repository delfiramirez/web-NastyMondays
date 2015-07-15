<?php
function NMpath($REL_path) {
    $filepath=filepath($REL_path);
    $NMpath=str_replace($_SERVER['DOCUMENT_ROOT'],'',$filepath);
    return $NMpath;
}
?>