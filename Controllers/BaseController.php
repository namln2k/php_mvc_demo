<?php
class BaseController {
    // Folder of views
    const VIEW_FOLDER_NAME = 'Views';
    // Folder of models
    const MODEL_FOLDER_NAME = 'Models';

    /**
     * Load the view corresponding to the given view path and the data associated
     *
     * @param String $viewPath The path of the model ($viewPath looks like this: 'frontend.products.index')
     * @param array $data The data associated with the view
     * @return void
     */
    protected function view($viewPath, array $data = []) {
        $viewPath = str_replace('.', '/', $viewPath);

        foreach ($data as $key => $val) {
            $$key = $val;
        }

        include(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php');
    }
    
    /**
     * Load the model corresponding to the given model name
     *
     * @param String $modelName The name of the model
     * @return void
     */
    protected function loadModel($modelName) {
        require(self::MODEL_FOLDER_NAME . '/' . $modelName . '.php');
    }
}
