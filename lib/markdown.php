<?php
use Parsedown as M;
/**
 * 2017-05-06 https://github.com/erusev/parsedown#example
 * @param string $s
 * @return string
 */
function dfe_portal_markdown($s) {return (new M)->text($s);}