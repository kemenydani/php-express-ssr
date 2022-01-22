<?php

namespace src\page\giromoney;


use src\interfaces\PageViewModel;
use src\interfaces\PageViewModelBuilder;
use src\ui\button\ButtonBuilder;
use src\ui\section\PageSection;
use src\ui\section\PageSectionBuilder;
use src\ui\teaser\ControlsBuilder;
use src\ui\teaser\TeaserBuilder;

final class GiroMoneyLandingPageViewModelBuilder implements PageViewModelBuilder {

    public $pageSections = [];

    public function create(): PageViewModel {
        $this->withPageSection($this->getTeaserPageSection());
        $this->withPageSection($this->getIntroductionPageSection());
        $this->withPageSection($this->getSomeOtherPageSection());
        return $this->build();
    }

    public function getTeaserPageSection(): PageSection {
        $pageSectionBuilder = new PageSectionBuilder();
        $pageSectionBuilder->withId('test-section-id');

        $buttonBuilder = new ButtonBuilder();
        $buttonBuilder->withText('Button Text');

        $controlsBuilder = new ControlsBuilder();
        $controlsBuilder->withButton($buttonBuilder->build());

        $teaserBuilder = new TeaserBuilder();
        $teaserBuilder->withTitle('Teaser title');
        $teaserBuilder->withBullets([
            'bullet 1',
            'bullet 2',
            'bullet 3'
        ]);
        $teaserBuilder->withControls($controlsBuilder->build());

        $pageSectionBuilder->withTeaser($teaserBuilder->build());
        return $pageSectionBuilder->build();
    }

    public function getIntroductionPageSection(): PageSection {
        $pageSectionBuilder = new PageSectionBuilder();

        $pageSectionBuilder->withId('section-intro');
        $pageSectionBuilder->withTitle('Titled Section');
        $pageSectionBuilder->withSubTitle('Subtitle of titled section ');

        return $pageSectionBuilder->build();
    }

    public function getSomeOtherPageSection(): PageSection {
        $pageSectionBuilder = new PageSectionBuilder();

        $pageSectionBuilder->withId('section-some-other');
        $pageSectionBuilder->withTitle('Some Other Section');
        $pageSectionBuilder->withSubTitle('Subtitle of some other section ');

        return $pageSectionBuilder->build();
    }

    public function withPageSection(PageSection $pageSection): void {
        $this->pageSections[] = $pageSection;
    }

    public function build(): PageViewModel {
        $view = new GiroMoneyLandingPageViewModel();
        $view->setPageSections($this->pageSections);
        return $view;
    }

}