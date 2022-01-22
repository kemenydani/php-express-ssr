<?php

namespace src\page\creditcard;


use src\interfaces\PageController;
use src\interfaces\PageViewModel;

class CreditCardLandingPageController implements PageController {

    public function __construct() {

    }

    public function getPageViewModel(): PageViewModel {
        $builder = new CreditCardLandingPageViewModelBuilder();
        return $builder->create();
    }

}