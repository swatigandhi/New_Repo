<?php


class CSVfilereadCest
{
    public function _before(AcceptanceTester $I)
    {
        echo "start the test";
    }

    public function _after(AcceptanceTester $I)
    {
        echo "end the test";
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        echo "swati gandhi";
    }
}
