<?php
	class Examconfigmodel extends CI_Model{
		//add exam section start
		public function addExam($exam){
		$db = array(
			"exam_head" => $exam,
				//"school_code"=>$this->session->userdata("school_code"),
		);
		if(strlen($exam) > 1){
			$this->db->insert("exam_head",$db);
		}
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		$query = $this->db->get("exam_head");
		return $query;
	}

	public function addsExam(){
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		$query = $this->db->get("exam_head");
		return $query;
	}
	//update Exam code
		public function updateExam($examId,$examName){
		$val = array(
				"exam_head" => $examName,
				//"school_code"=>$this->session->userdata("school_code"),
		);
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
			//$this->db->where("school_code",$this->session->userdata("school_code"));es
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
		//start add Subject section
			public function addSubjectModel($examsubHead,$subtestname,$subName,$subQuesNo){
				$db = array(
					"subject_name" => $subName,
					"exam_head_id" => $examsubHead,
					"test_name_id" => $subtestname,
					"subject_ques_no" => $subQuesNo
				);
				if(strlen($subName)>1){
					$this->db->insert("subject",$db);
				}
				$query = $this->db->get("subject");
				return $query;
			}
			public function addsSubjectModel(){
				$query = $this->db->get("subject");
				return $query;
			}
			public function updateSubjectModel($subId,$subName,$questionNo){
				$val = array(
				"subject_name" => $subName,
				"subject_ques_no" => $questionNo
				//"school_code"=>$this->session->userdata("school_code"),
				);
				$this->db->where("id",$subId);
				$query = $this->db->update("subject",$val);
				return true;
		}
	public function deleteSubjectModel($subId){
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		  $subject=$this->db->get('subject')->result();
		   	  	$this->db->where("id",$subId);
		    $query = $this->db->delete("subject");
		    return $query;
		}
		//end add Subject section
		///ADD UPDATE DELETE SECTION OF QUESTION STart
			public function addQuestionModel($question ,$subject_ID){
				$db = array(
					"question" => $question,
					"subject_id" => $subject_ID
						//"school_code"=>$this->session->userdata("school_code"),
				);
				if(strlen($question) > 1){
					$this->db->insert("question",$db);
				}
				//$this->db->where("school_code",$this->session->userdata("school_code"));
				$query = $this->db->get("question");
				return $query;
			}
	public function addsQuestionModel(){
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		$query = $this->db->get("question");
		return $query;
	}
	public function updateQuestionModel($quesId,$quesName){
				$val = array(
				"question" => $quesName
				//"school_code"=>$this->session->userdata("school_code"),
				);
				$this->db->where("id",$quesId);
				$query = $this->db->update("question",$val);
				return true;
		}
	public function deleteQuestionModel($quesId){
		//$this->db->where("school_code",$this->session->userdata("school_code"));
		  $question=$this->db->get('question')->result();
		   	  	$this->db->where("id",$quesId);
		    $query = $this->db->delete("question");
		    return $query;
		}
		///ADD UPDATE DELETE SECTION OF QUESTION END
	}
?>