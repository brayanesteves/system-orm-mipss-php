<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 08:39 PM  
     */
    use View\Views;
    use App\model\Usr;
    class UsersController {

        public function index() {
            $user               = new Usr();
            $user->Usrnm        = "Brayan";
            $user->Passwrd      = 1234;
            $user->Rfrnc_Prsn   = 1;
            $user->UsrTyp_Rfrnc = 1;
            $user->Cndtn        = 1;
            $user->Rmvd         = 0;
            $user->Lckd         = 0;
            $user->DtAdmssn     = "0001-01-01";
            $user->ChckTm       = "00:00:00";

            //echo $user->Usrnm;

            $user->getTable();
        }

        public function test() {
            /**
             * Fake data
             */
            $users = array(
                1 => array(
                    "Usrnm"        => "Brayan",
                    "Passwrd"      => 1234,
                    "Rfrnc_Prsn"   => 1,
                    "UsrTyp_Rfrnc" => 1,
                    "Cndtn"        => 1,
                    "Rmvd"         => 0,
                    "Lckd"         => 0,
                    "DtAdmssn"     => "0001-01-01",
                    "ChckTm"       => "00:00:00"
                ),
                2 => array(
                    "Usrnm"        => "Otniel",
                    "Passwrd"      => 1234,
                    "Rfrnc_Prsn"   => 1,
                    "UsrTyp_Rfrnc" => 1,
                    "Cndtn"        => 1,
                    "Rmvd"         => 0,
                    "Lckd"         => 0,
                    "DtAdmssn"     => "0001-01-01",
                    "ChckTm"       => "00:00:00"
                ),
                3 => array(
                    "Usrnm"        => "Jhou",
                    "Passwrd"      => 1234,
                    "Rfrnc_Prsn"   => 1,
                    "UsrTyp_Rfrnc" => 1,
                    "Cndtn"        => 1,
                    "Rmvd"         => 0,
                    "Lckd"         => 0,
                    "DtAdmssn"     => "0001-01-01",
                    "ChckTm"       => "00:00:00"
                ),
                4 => array(
                    "Usrnm"        => "Nerón",
                    "Passwrd"      => 1234,
                    "Rfrnc_Prsn"   => 1,
                    "UsrTyp_Rfrnc" => 1,
                    "Cndtn"        => 1,
                    "Rmvd"         => 0,
                    "Lckd"         => 0,
                    "DtAdmssn"     => "0001-01-01",
                    "ChckTm"       => "00:00:00"
                ),
                5 => array(
                    "Usrnm"        => "Brandon",
                    "Passwrd"      => 1234,
                    "Rfrnc_Prsn"   => 1,
                    "UsrTyp_Rfrnc" => 1,
                    "Cndtn"        => 1,
                    "Rmvd"         => 0,
                    "Lckd"         => 0,
                    "DtAdmssn"     => "0001-01-01",
                    "ChckTm"       => "00:00:00"
                ),
            );
            /**
             * Example: 
             * 'users.list.index'
             * 1) 'users' => 'folder'
             * 2) 'list'  => 'folder'
             * 3) 'index' => file .php or .html
             */
            return Views::create("users.test", "users", array("users" => $users));
        }
        public function insert() {
            
        }
    }
?>