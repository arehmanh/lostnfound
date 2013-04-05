<?php
/**
 * Consult documentation on http://agiletoolkit.org/learn 
 */
class Frontend extends ApiFrontend {
    function init(){
        parent::init();

        $this->dbConnect();
        $this->requires('atk','4.2.0');

        $this->addLocation('atk4-addons',array(
                    'php'=>array(
                        'mvc',
                        'misc/lib',
                        )
                    ))
            ->setParent($this->pathfinder->base_location);

        $this->add('jUI');
        $this->js()
            ->_load('atk4_univ')
            ->_load('ui.atk4_notify')
            ;

        $this->add('Menu',null,'Menu')
            ->addMenuItem('index','Welcome')
            ->addMenuItem('logout')
            ;

        $this->addLayout('UserMenu');
    }
}
