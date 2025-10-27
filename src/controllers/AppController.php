<?php

class AppController
{
    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'public/views/'. $template.'.html';
        $templatePath404 = 'public/views/404.html';
        $output = "";

        if(file_exists($templatePath)){
            extract($variables);
            //$message ="Błędne hasło";
            //echo $message; // test zmiennej przekazanej do widoku
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        } else {
            ob_start();
            include $templatePath404;
            $output = ob_get_clean();
        }
        echo $output;
    }
}