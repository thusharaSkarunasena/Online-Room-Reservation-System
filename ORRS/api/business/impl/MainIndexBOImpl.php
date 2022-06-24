<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 27/11/2018
 * Time: 7:28 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../model/SearchDetail.php";
require_once __DIR__."/../../business/MainIndexBO.php";
require_once __DIR__."/../../repo/impl/MainIndexRepoImpl.php";

class MainIndexBOImpl implements MainIndexBO
{
    private $mainIndexRepo;

    /**
     * MainIndexBOImpl constructor.
     */
    public function __construct()
    {
        $this->mainIndexRepo = new MainIndexRepoImpl();

        $connection = (new DBConnection)->getConnection();
        $this->mainIndexRepo->setConnection($connection);
    }


    public function searchRooms(SearchDetail $searchDetail): bool
    {
        return $this->mainIndexRepo->searchRooms($searchDetail);
    }
}