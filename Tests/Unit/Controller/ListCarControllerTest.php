<?php
namespace Envauto\CarList\Tests\Unit\Controller;

/**
 * Test case.
 */
class ListCarControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarList\Controller\ListCarController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Envauto\CarList\Controller\ListCarController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllListCarsFromRepositoryAndAssignsThemToView()
    {

        $allListCars = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $listCarRepository = $this->getMockBuilder(\Envauto\CarList\Domain\Repository\ListCarRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $listCarRepository->expects(self::once())->method('findAll')->will(self::returnValue($allListCars));
        $this->inject($this->subject, 'listCarRepository', $listCarRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('listCars', $allListCars);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenListCarToView()
    {
        $listCar = new \Envauto\CarList\Domain\Model\ListCar();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('listCar', $listCar);

        $this->subject->showAction($listCar);
    }
}
