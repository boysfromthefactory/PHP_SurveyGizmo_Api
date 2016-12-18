<?php
namespace SurveyGizmo\Resources\Survey;

use SurveyGizmo\ApiResource;
use SurveyGizmo\Helpers\SurveyGizmoException;

/**
 * Class for Survey Page API objects
 * Page is a sub-object of Surveys
 */
class Page extends ApiResource {

	/**
	 * API call path
	 */
	static $path = "/survey/{survey_id}/surveypage/{id}";

    /**
     * Save current Page Obj
	 * @access public
	 * @return SurveyGizmo\ApiResponse Object with SurveyGizmo\Page Object
	 */
	public function save(){
		return $this->_save(array(
			'survey_id' => $this->survey_id,
			'id' => $this->exists() ? $this->id : ''
		));
	}

	/**
	 * Delete current Page Obj
	 * @access public
	 * @return SurveyGizmo\ApiResponse Object
	 */
	public function delete(){
		return self::_delete(array(
			'id' => $this->id,
		));
	}

	/**
	 * Get current Pages Question Obj by id
	 * @access public
	 * @param Int $id question ID
	 * @return SurveyGizmo\Resource\Question Object
	 */
	public function getQuestion($id){
		foreach ($this->questions as $key => $question) {
			if($question->id == $id){
				return $question;
			}
		}
	}
}
?>