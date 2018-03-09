<?php
/* For licensing terms, see /license.txt */

class DictionaryPlugin extends Plugin
{
    protected function __construct()
    {
        parent::__construct(
            '1.0',
            'Julio Montoya',
            array(
                'enable_plugin_dictionary' => 'boolean'
            )
        );
    }

    /**
     * @return DictionaryPlugin|null
     */
    public static function create()
    {
        static $result = null;
        return $result ? $result : $result = new self();
    }

    public function install()
    {
        $sql = "CREATE TABLE plugin_dictionary (
                id INT NOT NULL AUTO_INCREMENT,
                term VARCHAR(255) NOT NULL,
                definition LONGTEXT NOT NULL,
                PRIMARY KEY (id));
        ";
        Database::query($sql);
    }

    public function uninstall()
    {
        $sql = "DROP TABLE IF EXISTS plugin_dictionary";
        Database::query($sql);
    }
}