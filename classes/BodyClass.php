<?php

class BodyClass
{
    public static function add($classes)
    {
        $classes[] = 'custom-theme';
        return $classes;
    }
}