<?php
class BaseController {
    /**
     * View the page corresponding to the given path
     *
     * @param [string] $path: The path to the page to view
     * $path looks like this: 'frontend.products.index'
     */
    protected function view($path, array $data = []) {
        $path = str_replace('.', '/', $path);

        foreach ($data as $key => $val) {
            $$key = $val;
        }

        include './Views/' . $path . '.php';
    }
}
