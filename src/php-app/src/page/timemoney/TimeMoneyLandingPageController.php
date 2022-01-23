<?php

namespace src\page\timemoney;


use src\interfaces\PageController;
use src\interfaces\PageViewModel;

class TimeMoneyLandingPageController implements PageController {

    public function getPageViewModel(): PageViewModel {
        $builder = new TimeMoneyLandingPageViewModelBuilder();
        return $builder->create();
    }

}