<?php
	function json(){
   		$out = new stdClass();
		$out->name = "Ilham Yoga Pratama";
		$out->address = "Ds.Pakisrejo, Rejotangan, Tulungagung";
		$out->hobbies = ["Game","Coding","Badminton"];
		$out->is_married = FALSE;
		$out->school = ["highSchool"=>"SMKN 1 BOYOLANGU","university"=>"Not college yet"];
		$out->skills =  array(
							["name" => "coding", "score"=>70],
							["name" => "design", "score"=>80],
							["name" => "badminton", "score"=>85]
						);
		return json_encode($out);
	}
	echo json();
?>