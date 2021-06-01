<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/24/19
 * Time: 07:45
 */
namespace App\Services\HomeService;
use App\Services\ServiceBase;

class HomeService extends ServiceBase
{
    protected $config;
    protected $data;

    public function __construct()
    {
        $data = file_get_contents(database_path("json/background/home.json"));
        $data = json_decode($data, true);
        $this->data = $data;
    }

    public function getBanner()
    {
        return [];
    }

    public function getJobAndCompanyFeature()
    {
        return [
            'compans' => [],
            'jobs' => []
        ];
    }

    public function getRecentSearch()
    {
        return [];
    }

    public function getCategoryHot()
    {
        return $this->data['category'];
    }

    public function getListJobVip()
    {
        return $this->data['job_feature'];
    }

    public function getAds()
    {
        return [];
    }

    public function getWhyUs()
    {
        return [];
    }

    public function getResume()
    {
        return [];
    }

    public function getFeedBack()
    {
        return [];
    }

    public function getPartner()
    {
        return $this->data['employer_brand'];
    }

    public function getPostIntro()
    {
        return [];
    }

    public function getSuggestLink()
    {
        return [];
    }

    public function getResumePlan()
    {
        return [];
    }
}
