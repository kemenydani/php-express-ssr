<?php

namespace src\page\giromoney;


use src\interfaces\PageController;
use src\interfaces\PageViewModel;

class GiroMoneyLandingPageController implements PageController {

    public function __construct() {

    }

    public function getPageViewModel(): PageViewModel {
        $builder = new GiroMoneyLandingPageViewModelBuilder();
        return $builder->create();
    }

}