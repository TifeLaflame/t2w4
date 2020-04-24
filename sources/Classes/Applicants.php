<?php
    class Applicants 
    {
        public static function getAllApp()
        {
            $arrApplicants = DbCon::fetchData("SELECT * FROM contactform");
            
            foreach($arrApplicants as $applicant)
            {
               $oApplicant= new Applicant($applicant['id'], $applicant['strName'], $applicant['strEmail'], $applicant['strMessage'], $applicant['strLink'], $applicant['strResume']);
   
               //an array receives the object
               $arrOApplicants[]=$oApplicant;
            }
            //an object is returned 
            return $arrOApplicants;
        }
    }
?>