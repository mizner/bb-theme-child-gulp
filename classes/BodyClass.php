<?php

class BodyClass
{
    public function add($classes)
    {
        $classes[] = 'custom-theme';
        return $classes;
    }
}