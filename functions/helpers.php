<?php

function parseClass($p = '', $headerStyles = [])
{
    if(empty($headerStyles))
    {
        return '';
    }

    return empty($headerStyles[$p]) ? '' : ' '.$headerStyles[$p];
}

function checkNav($current, $page)
{
    return $page == $current ? 'current' : '';
}

function __($key, $res)
{
    if(!empty($res[$key]))
    {
        return $res[$key];
    }

    return $key;
}
