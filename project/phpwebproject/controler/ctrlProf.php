<?php
require('../../model/mdlProf.php');

class ctrl_profs {
    // Cette fonction a pour but de retourner la liste des étudiants
    function index() {
        $profs = mdl_profs::get_data();
        return $profs;
    } 

    function add($e){
        $profs = mdl_profs::insert($e);
    }

    function setDataform($id) {
        // afficher une formulaire pré-remplie
        $profs = mdl_profs::get_by_id($id);
        return $profs;
    }

    function save() {
        $save = mdl_profs::get_by_id($id);
        return $save;
    }

    function update($q, $id) {
        $profs = mdl_profs::update($q,$id);
    }

    function delete() {
        $delete = mdl_profs::delete();
    }

    function showDetails($id) {
        $profs = mdl_profs::get_by_id($id);
        return $profs;
    }
}
?>