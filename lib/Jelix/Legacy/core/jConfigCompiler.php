<?php
/**
* @package  Jelix\Legacy
* @author   Laurent Jouanneau
* @contributor
* @copyright 2014 Laurent Jouanneau
* @link     http://www.jelix.org
* @licence  MIT
*/

/**
 * dummy class for compatibility
 * @see \Jelix\Core\Config\Compiler
 * @deprecated
 */
class jConfigCompiler {

    private function __construct (){ }

    static public function read($configFile, $allModuleInfo = false, $isCli = false, $pseudoScriptName=''){
        $compiler = new \Jelix\Core\Config\Compiler ($configFile, $pseudoScriptName, $isCli);
        return $compiler->read($allModuleInfo);
    }

    static public function readAndCache($configFile, $isCli = null, $pseudoScriptName = '') {
        $compiler = new \Jelix\Core\Config\Compiler ($configFile, $pseudoScriptName, $isCli);
        return $compiler->readAndCache();
    }

    static public function findServerName($ext = '.php', $isCli = false) {
        return \Jelix\Core\Config\Compiler::findServerName($ext, $isCli);
    }
}
