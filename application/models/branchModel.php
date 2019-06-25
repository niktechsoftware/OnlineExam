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
		$userName = $this->session->userdata('username');
		$this->db->where('username',$userName);
		$id=$this->db->get('branch')->row();
		$branchId = $id->id;
		$this->db->where('branch_id',$branchId);
		$examId=$this->db->get('exam_head')->result();
		//print_r($examId);
		
		return $examId;
		//exit;
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
				);
				$this->db->where("id",$subId);
				$query = $this->db->update("subject",$val);
				return true;
		}
	public function deleteSubjectModel($subId){
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
				);
				if(strlen($question) > 1){
					$this->db->insert("question",$db);
				}
				$query = $this->db->get("question");
				return $query;
			}
	public function addsQuestionModel(){
		$query = $this->db->get("question");
		return $query;
	}
	public function updateQuestionModel($quesId,$quesnm){
				$val = array(
				"question" => $quesnm
				);
				$this->db->where("id",$quesId);
				$query = $this->db->update("question",$val);
				return true;
		}
		
	public function deleteQuestionModel($quesId){
		  $question=$this->db->get('question')->result();
		   	  	$this->db->where("id",$quesId);
		    $query = $this->db->delete("question");
		    return $query;
		}
		///ADD UPDATE DELETE SECTION OF QUESTION END
		///option code start
			function insertoption($data)
			{ 
				$query1 = $this->db->insert("ques_option",$data);
				return true;
			}
		///option code end
			///option update code start
					public function updateOption($questionId,$optionNo,$optionValue){
		$val = array(
				"option_value" => $optionValue,
				//"school_code"=>$this->session->userdata("school_code"),
		);
		$this->db->where("question_id",$questionId);
		$this->db->where('option_no',$optionNo);
		$query = $this->db->update("ques_option",$val);
		return true;
	}
			///option update code end

			/// Max Marks code start
				public function addMarksModel($testMarksID,$subjectMarksID,$maxMarks,$negMarksStatus,$negMarks,$canceStatus,$canceMarks){
					//print_r($testMarksID);exit();
				$db = array(
					"test_name_id" => $testMarksID,
					"subject_id" => $subjectMarksID,
					"max_marks" => $maxMarks,
					"negative_marks_status" => $negMarksStatus,
					"negative_marks" => $negMarks,
					"cancle_marks_status" => $canceStatus,
					"cancle_marks" => $canceMarks
				);//print_r($db);exit();
				// if(!$maxMarks){
					$this->db->insert("marking",$db);
				// }
				
				//print_r($query);exit();
				return true;
			}
	public function addsMarksModel(){
		$query = $this->db->get("marking");
		return $query;
	}
	///max marks code end
	}
	
?>