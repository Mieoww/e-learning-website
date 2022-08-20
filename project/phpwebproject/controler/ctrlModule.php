<?php
    include('../../model/mdlModule.php');


class ctrl_Module
{
    public function index() 
        {
            $listeModule = Models::get_data();
            return $listeModule;
        }

    
        public function add($i)
        {
            $addModule = Models::add($i);
        }

        function setDataForm($id)
        {
            //afficher une formulaire prédéfinie

            $info = Models::updateForm($id);
            return $info;
            
        }

        function update($a, $i)
        {
            $save = Models::update($a, $i);
        }

        function delete($id)
        {
            $delete = Models::delete($id);
        }

}

?>