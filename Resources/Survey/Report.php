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
     * Fetch list of SurveyGizmo Report Objects by survey id
     * @access public
     *
     * @param int   $survey_id - Survey ID
     * @param array $filters
     * @param Array $options
     *
     * @return SurveyGizmo\ApiResponse Object with SurveyGizmo\Report Objects
     * @throws SurveyGizmoException
     */
    public static function fetch($survey_id, $filters = null, $options = null)
    {
        if ($survey_id < 1) {
            throw new SurveyGizmoException(500, "Missing survey ID");
        }
        $response = self::_fetch(
            [
                'id'        => '',
                'survey_id' => $survey_id,
            ],
            $filters,
            $options
        );

        return $response;
    }

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
