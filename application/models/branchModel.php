<?php 

	class BranchModel extends CI_Model{
		//start add test section
		public function addTestModel($examHead,$testname,$testDes,$testmark){
			$db = array(
			"test_name" => $testname,
			"exam_head_id" =>$examHead,
			"test_description" => $testDes,
			"test_marks" => $testmark
				//"school_code"=>$this->session->userdata("school_code"),
			);
			if(strlen($testname)>1&&strlen($testDes)>1&&strlen($testmark)>1){
			    $this->db->insert("test_name",$db);
			    }
			   $query = $this->db->get("test_name");
			   return $query;
		}
		public function addsTestModel(){
			//$quer = $this->db->where('exam_head_id',$examnm);
			$query = $this->db->get("test_name");
			return $query;
		}
		public function updateTestModel($testId,$testName,$testDesc,$testMark){
		$val = array(
				"test_name" => $testName,
				"test_description" => $testDesc,
				"test_marks" => $testMark
				//"school_code"=>$this->session->userdata("school_code"),
		);
		$this->db->where("id",$testId);
		$query = $this->db->update("test_name",$val);
		return true;
	}
	public function deleteTestModel($testId){
		//$this->db->where("school_code",$this->session->userdata("school_code"));

		  $test=$this->db->get('test_name')->result();
		foreach ($test as $value) {
		   	  if($value->test_name==$testId){
                echo "<script>alert('you can not delete this test because this exam is already used in class');</script>";
                return false;
		   	  }
		   }
		   	  	$this->db->where("id",$testId);
		    $query = $this->db->delete("test_name");
		    return $query;
		}
		//end add test section
		// end add test section
	}
?>