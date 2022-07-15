<?php
class View
{
    private $_file;
    private $_pageTitle;

    public function __construct($action)
    {
        $this->_file = 'Views/view' . $action . '.php';
    }

    public function generate($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile('Views/template.php', array(
            'pageTitle' => $this->_pageTitle,
            'content' => $content
        ));

        echo $view;
    }

    private function generateFile($file, $data)
    {
        if (file_exists($file)) {

            extract($data);

            ob_start();

            require $file;

            return ob_get_clean();
        } else {
            throw new Exception('Fichier ' . $file . '.php');
        }
    }
}
