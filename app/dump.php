<?php
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;

VarDumper::setHandler(function ($var) {
    $cloner = new VarCloner();
    $htmlDumper = new HtmlDumper();
    $cliDumper = new CliDumper();

    $htmlDumper->setStyles([
        'default' => 'background-color:#fff; color:#FF8400; line-height:32px; font:16px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: normal',
        'public' => 'color:#222',
        'protected' => 'color:#222',
        'private' => 'color:#222',
    ]);

    $dumper = PHP_SAPI === 'cli' ? $cliDumper : $htmlDumper;

    $dumper->dump($cloner->cloneVar($var));exit;
});
?>