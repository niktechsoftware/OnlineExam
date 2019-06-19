<?php 

	class BranchModel extends CI_Model{
			//add exam section start
		public function addExam($exam,$branchId){
		$db = array(
			"exam_head" => $exam,
			"branch_id" => $branchId
		);
		if(strlen($exam) > 1){
			$this->db->insert("exam_head",$db);
		}
		$query = $this->db->get("exam_head");
		return $query;
	}

	public function addsExam(){
		
		$username=$this->session->userdata('username');
		$this->db->where('username',$username);
		$branch = $this->db->get('branch')->row();
		//print_r($branch->id);exit();
		$this->db->where('branch_id',$branch->id);
		$query = $this->db->get("exam_head");
		return $query;
	}
	//update Exam code
		public function updateExam($examId,$examName){
			$userName = $this->session->userdata('username');
		$this->db->where('username',$userName);
		$id=$this->db->get('branch')->row();
		$branchId = $id->id;
		$val = array(
				"exam_head" => $examName,
				//"school_code"=>$this->session->userdata("school_code"),
		);
		$this->db->where('branch_id',$branchId);
		$this->db->where("id",$examId);

		$query = $this->db->update("exam_head",$val);
		return true;
	}
	public function deleteExam($examId){
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		  $exam=$this->db->get('exam_head')->result();
		foreach ($exam as $value) {
		   	  if($value->exam_head==$examId){
                echo "<script>alert('you can not delete this exam because this exam is already used in class');</script>";
                return false;
		   	  }
		   }
		   	  	$this->db->where("id",$examId);
		    $query = $this->db->delete("exam_head");
		    return $query;
		}
		// end add  exam section  
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