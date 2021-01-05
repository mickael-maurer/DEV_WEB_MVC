<?php


final class View {

    public static function openBuffer() {
        ob_start();
    }

    public static function getBufferContent() {
        return ob_get_clean();
    }

    public static function getView($S_localisation, $A_params = array()) {
        $S_file = __DIR_VIEW__ . $S_localisation . 'View.php';
        $A_views = $A_params;
        ob_start();
        include $S_file;
        ob_end_flush();
    }

}