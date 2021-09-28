<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 11:05 AM
     * 
     * @class Usr (English: Users / Spanish: Usuarios)
     * @table 'database' 0_Usrs (English: 0 - Users / Spanish: 0 - Usuarios)
     */
    class Usr {
        private $Rfrnc;
        private $Usrnm;
        private $Psswrd;
        private $Rfrnc_Prsn;
        private $UsrTyp_Rfrnc;
        private $Cndtn;
        private $Rmvd;
        private $Lckd;
        private $DtAdmssn;
        private $ChckTm;

        function __construct($Rfrnc, $Usrnm, $Psswrd, $Rfrnc_Prsn, $UsrTyp_Rfrn, $Cndtn, $Rmvd, $Lckd, $DtAdmssn, $ChckTm) {
            $this->Rfrnc       = $Rfrnc;
            $this->Usrnm       = $Usrnm;
            $this->Psswrd      = $Psswrd;
            $this->Rfrnc_Prsn  = $Rfrnc_Prsn;
            $this->UsrTyp_Rfrn = $UsrTyp_Rfrn;
            $this->Cndtn       = $Cndtn;
            $this->Rmvd        = $Rmvd;
            $this->Lckd        = $Lckd;
            $this->DtAdmssn    = $DtAdmssn;
            $this->ChckTm      = $ChckTm;
        }

        /**
         * Rfrnc (English: Reference / Spanish: Referencia)
         */
        public function setRfrnc($Rfrnc) {
            $this->Rfrnc = $Rfrnc;
        }
        public function getRfrnc($Rfrnc) {
            return $this->Rfrnc;
        }
        
        /**
         * Usrnm (English: Username / Spanish: Nombre de Usuario)
         */
        public function setUsrnm($Usrnm) {
            $this->Usrnm = $Usrnm;
        }
        public function getUsrnm($Usrnm) {
            return $this->Usrnm;
        }
        
        /**
         * Psswrd (English: Password / Spanish: Contraseña)
         */
        public function setPsswrd($Psswrd) {
            $this->Psswrd = $Psswrd;
        }
        public function getPsswrd($Psswrd) {
            return $this->Psswrd;
        }
        
        /**
         * Rfrnc_Prsn (English: Reference. Person / Spanish: Referencia. Persona)
         */
        public function setRfrnc_Prsn($Rfrnc_Prsn) {
            $this->Rfrnc_Prsn = $Rfrnc_Prsn;
        }
        public function getRfrnc_Prsn($Rfrnc_Prsn) {
            return $this->Rfrnc_Prsn;
        }
        
        /**
         * UsrTyp_Rfrnc (English: User Type. Reference / Spanish: Referencia. Tipo de Usuario)
         */
        public function setUsrTyp_Rfrn($UsrTyp_Rfrn) {
            $this->UsrTyp_Rfrn = $UsrTyp_Rfrn;
        }
        public function getUsrTyp_Rfrn($UsrTyp_Rfrn) {
            return $this->UsrTyp_Rfrn;
        }
        
        /**
         * Cndtn (English: Condition [0: Inactive, 1: Active] / Spanish: Estado [0: Inactivo, 1: Activo])
         */
        public function setCndtn($Cndtn) {
            $this->Cndtn = $Cndtn;
        }
        public function getCndtn($Cndtn) {
            return $this->Cndtn;
        }
        
        /**
         * Rmvd (English: Removed [0: Inactive, 1: Active] / Spanish: Eliminado [0: Inactivo, 1: Activo])
         */
        public function setRmvd($Rmvd) {
            $this->Rmvd = $Rmvd;
        }
        public function getRmvd($Rmvd) {
            return $this->Rmvd;
        }
        
        /**
         * Lckd (English: Locked [0: Inactive, 1: Active] / Spanish: Bloqueado [0: Inactivo, 1: Activo])
         */
        public function setLckd($Lckd) {
            $this->Lckd = $Lckd;
        }
        public function getLckd($Lckd) {
            return $this->Lckd;
        }
        
        /**
         * DtAdmssn (English: Date of Admission / Spanish: Fecha de Ingreso)
         */
        public function setDtAdmssn($DtAdmssn) {
            $this->DtAdmssn = $DtAdmssn;
        }
        public function getDtAdmssn($DtAdmssn) {
            return $this->DtAdmssn;
        }
        
        /**
         * ChckTm (English: Check In Time  / Spanish: Hora de Ingreso)
         */
        public function setChckTm($ChckTm) {
            $this->ChckTm = $ChckTm;
        }
        public function getChckTm($ChckTm) {
            return $this->ChckTm;
        }
    }