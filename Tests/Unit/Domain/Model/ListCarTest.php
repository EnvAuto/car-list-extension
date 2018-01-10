<?php
namespace Envauto\CarList\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ListCarTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarList\Domain\Model\ListCar
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Envauto\CarList\Domain\Model\ListCar();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForIntSetsPlace()
    {
        $this->subject->setPlace(12);

        self::assertAttributeEquals(
            12,
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYearReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYear()
        );
    }

    /**
     * @test
     */
    public function setYearForIntSetsYear()
    {
        $this->subject->setYear(12);

        self::assertAttributeEquals(
            12,
            'year',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMpgReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMpg()
        );
    }

    /**
     * @test
     */
    public function setMpgForFloatSetsMpg()
    {
        $this->subject->setMpg(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'mpg',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getManufacturerReturnsInitialValueForListManufacturer()
    {
        self::assertEquals(
            null,
            $this->subject->getManufacturer()
        );
    }

    /**
     * @test
     */
    public function setManufacturerForListManufacturerSetsManufacturer()
    {
        $manufacturerFixture = new \Envauto\CarList\Domain\Model\ListManufacturer();
        $this->subject->setManufacturer($manufacturerFixture);

        self::assertAttributeEquals(
            $manufacturerFixture,
            'manufacturer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClassReturnsInitialValueForListClass()
    {
        self::assertEquals(
            null,
            $this->subject->getClass()
        );
    }

    /**
     * @test
     */
    public function setClassForListClassSetsClass()
    {
        $classFixture = new \Envauto\CarList\Domain\Model\ListClass();
        $this->subject->setClass($classFixture);

        self::assertAttributeEquals(
            $classFixture,
            'class',
            $this->subject
        );
    }
}
