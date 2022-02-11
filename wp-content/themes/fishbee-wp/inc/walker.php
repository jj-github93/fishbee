<?php

class Walker_Nav_Primary extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        $before_start_lvl = '<nav class="mt-0 w-full bg-gray-900 opacity-70 rounded-t-lg">';
        $before_start_lvl .= "\n\t <div class='container mx-auto flex items-center'>";
        $before_start_lvl .= "\n\t <div class='flex w-1/2 pl-4 text-sm'>";

        $output .= "{$n}{$indent}{$before_start_lvl}<ul id=\"$this->submenu_unique_id\" class='list-reset flex justify-between flex-1 md:flex-none items-center'>{$n}";

    }
//    function start_el(){
//
//    }
//    function end_el(){
//
//    }
//    function end_lvl(){
//
//    }
}