<?php
namespace Envauto\CarList\Domain\Model;

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
 * ListCar
 */
class ListCar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * The order in which the car will appear in the list
     *
     * @var int
     * @validate NotEmpty
     */
    protected $place = 0;

    /**
     * The car's model
     *
     * @var string
     * @validate NotEmpty
     */
    protected $model = '';

    /**
     * The year the car was built
     *
     * @var int
     * @validate NotEmpty
     */
    protected $year = 0;

    /**
     * Content creators add their thoughts on the car model
     *
     * @var string
     */
    protected $description = '';

    /**
     * The car's miles per gallon EPA rating
     *
     * @var float
     */
    protected $mpg = 0.0;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * manufacturer
     *
     * @var \Envauto\CarList\Domain\Model\ListManufacturer
     */
    protected $manufacturer = null;

    /**
     * class
     *
     * @var \Envauto\CarList\Domain\Model\ListClass
     */
    protected $class = null;

    /**
     * Returns the place
     *
     * @return int $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param int $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the year
     *
     * @return int $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets the year
     *
     * @param int $year
     * @return void
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the mpg
     *
     * @return float $mpg
     */
    public function getMpg()
    {
        return $this->mpg;
    }

    /**
     * Sets the mpg
     *
     * @param float $mpg
     * @return void
     */
    public function setMpg($mpg)
    {
        $this->mpg = $mpg;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the manufacturer
     *
     * @return \Envauto\CarList\Domain\Model\ListManufacturer $manufacturer
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets the manufacturer
     *
     * @param \Envauto\CarList\Domain\Model\ListManufacturer $manufacturer
     * @return void
     */
    public function setManufacturer(\Envauto\CarList\Domain\Model\ListManufacturer $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Returns the class
     *
     * @return \Envauto\CarList\Domain\Model\ListClass $class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets the class
     *
     * @param \Envauto\CarList\Domain\Model\ListClass $class
     * @return void
     */
    public function setClass(\Envauto\CarList\Domain\Model\ListClass $class)
    {
        $this->class = $class;
    }
}
