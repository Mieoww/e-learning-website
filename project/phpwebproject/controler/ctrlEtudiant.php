<?php

    /*include('../../utils/fonctions.php');*/
    include('../../utils/db.php');
    include('../../model/mdlEtudiant.php');


    class ctrl_etudiants {

        public function index() 
        {
            $listeEtudiant = Models::get_data();
            return $listeEtudiant;
        }

        public function add($i, $m)
        {
            $addEtudiant = Models::add($i, $m);
        }

        function setDataForm($id)
        {
            //afficher une formulaire prédéfinie

            $info = Models::updateForm($id);
            return $info;
            
        }

        function update($a, $i, $e)
        {
            $save = Models::update($a, $i, $e);
        }

        function delete($id)
        {
            $delete = Models::delete($id);
        }

        function showDetails($id)
        {
            $detail = Models::updateForm($id); 
            return $detail; 
        }
    }






?>


