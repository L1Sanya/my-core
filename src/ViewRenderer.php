<?php

namespace Core\src;

class ViewRenderer
{
    public function render(string $view, array $params, bool $isLayout): string
    {
        if ($isLayout) {
            ob_start();

            extract($params);

            require_once "./../View/$view";

            $content = ob_get_clean();

            $layout = file_get_contents('./../View/layouts/navigation.html');

            $result = str_replace("{{content}}", $content, $layout);

        } else {
            ob_start();

            extract($params);

            require_once "./../View/$view";

            $result = ob_get_clean();
        }
        return $result;
    }
}