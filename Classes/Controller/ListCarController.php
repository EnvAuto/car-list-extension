<?php
namespace Envauto\CarList\Controller;

/***
 *
 * This file is part of the "Car List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * ListCarController
 */
class ListCarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * listCarRepository
     *
     * @var \Envauto\CarList\Domain\Repository\ListCarRepository
     * @inject
     */
    protected $listCarRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {


        //Get the current page Title
        $arr = $GLOBALS['TSFE']->rootLine;
        $titleArr = array_shift(array_values($arr));
        $currentTitle = $titleArr['title'];

        //If this is the worst cars page
        if (stristr($currentTitle, 'worst') !== false) {
            $listCars = $this->listCarRepository->findByListType(1);
            $this->view->assign('listCars', $listCars);
        }

        //If this is the best cars page
        else{
            $listCars = $this->listCarRepository->findByListType(0);
            $this->view->assign('listCars', $listCars);
        }
    }

    /**
     * action show
     *
     * @param \Envauto\CarList\Domain\Model\ListCar $listCar
     * @return void
     */
    public function showAction(\Envauto\CarList\Domain\Model\ListCar $listCar)
    {
        $this->view->assign('listCar', $listCar);
    }
}
