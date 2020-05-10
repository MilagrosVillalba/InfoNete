<?php

function getConfigFileAsArray(){
    return parse_ini_file('config.ini', true);

}
