<?php

namespace src\page\creditcard;


use src\interfaces\PageViewModel;
use src\interfaces\PageViewModelBuilder;
use src\ui\button\ButtonBuilder;
use src\ui\infoBox\InfoBoxBuilder;
use src\ui\section\PageSection;
use src\ui\section\PageSectionBuilder;
use src\ui\teaser\ControlsBuilder;
use src\ui\teaser\TeaserBuilder;

final class CreditCardLandingPageViewModelBuilder implements PageViewModelBuilder {

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
        $view = new CreditCardLandingPageViewModel();

        $ssrView = new SSRViewModel();
        $infoBoxBuilder = new InfoBoxBuilder();
        $infoBoxBuilder->withText("Bei Festgeld legen Sie einen gewünschten Geldbetrag für eine feste Laufzeit zu einem gleichbleibenden Zinssatz auf einem Festgeldkonto an. Einer der Vorteile von Festgeld ist, dass Sie die passende Laufzeit selbst wählen können – von wenigen Wochen bis zu mehreren Jahren. Die meisten Banken zahlen für längere Laufzeiten auch höhere Festgeld Zinsen.");
        $ssrView->setInfoBox($infoBoxBuilder->build());
        $infoBoxLeftBuilder = new InfoBoxBuilder();
        $infoBoxLeftBuilder->withText("Info box left");
        $ssrView->setInfoBoxLeft($infoBoxLeftBuilder->build());
        $infoBoxRightBuilder = new InfoBoxBuilder();
        $infoBoxRightBuilder->withText("Info box right");
        $ssrView->setInfoBoxRight($infoBoxRightBuilder->build());
        $buttonBuilder = new ButtonBuilder();
        $buttonBuilder->withText("Click me! I am hydrated...");
        $ssrView->setResultPageButton($buttonBuilder->build());
        $viewModel = http_build_query([
            "viewModel" => json_encode($ssrView, JSON_THROW_ON_ERROR)
        ]);

        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $viewModel
            )
        );
        $context = stream_context_create($opts);

        $reactHTML = file_get_contents('http://seo-desktop-node:3000/creditcard', false, $context);
        $view->setReactHTML($reactHTML);
        $view->setPageSections($this->pageSections);
        return $view;
    }

}
