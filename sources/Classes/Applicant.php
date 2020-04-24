<?php
    class Applicant 
    {
        public $id = "";
        public $fullName = "";
        public $email = "";
        public $message = "";
        public $portfolio = "";
        public $resume = "";
        

        public function __construct($id, $fullName, $email, $message, $portfolio, $resume)
        {
            $this->id =$id;
            $this->fullName =$fullName;
            $this->email = $email;
            $this->portfolio =$portfolio;
            $this->resume =$resume;
        }
        public static function getAppById($id)
        {
            $arrApplicants = DbCon::fetchData("SELECT * FROM contactform WHERE id ='".$id."'");

            $applicant = $arrApplicants[0];
            $oApplicant = new Applicant($applicant['id'], $applicant['strName'], $applicant['strEmail'], $applicant['strMessage'], $applicant['strLink'], $applicant['strResume']);

            return $oApplicant;
        }

    }
?>