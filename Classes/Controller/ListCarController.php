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
        $listCars = $this->listCarRepository->findAll();
        $this->view->assign('listCars', $listCars);
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
