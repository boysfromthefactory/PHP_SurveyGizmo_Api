<?php
namespace SurveyGizmo\Resources\Survey;

use SurveyGizmo\ApiResource;
use SurveyGizmo\Helpers\SurveyGizmoException;

/**
 * Class for Survey Report API objects
 * Report is a sub-object of Surveys
 */
class Report extends ApiResource
{

    /**
     * API call path
     */
    static $path = "/survey/{survey_id}/surveyreport/{id}";

    /**
     * Save current Report Obj
     * @access public
     * @return SurveyGizmo\ApiResponse Object with SurveyGizmo\Report Object
     */
    public function save()
    {
        return $this->_save([
            'survey_id' => $this->survey_id,
            'id'        => $this->id,
        ]);
    }

    /**
     * Delete current Report Obj
     * @access public
     * @return SurveyGizmo\ApiResponse Object
     */
    public function delete()
    {
        return self::_delete([
            'survey_id' => $this->survey_id,
            'id'        => $this->id,
        ]);
    }
}
