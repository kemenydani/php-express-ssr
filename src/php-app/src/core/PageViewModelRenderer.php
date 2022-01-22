<?php


namespace src\core;


use src\interfaces\PageViewModel;

final class PageViewModelRenderer {

    public function renderPageViewModel(string $page, PageViewModel $pageViewModel): void {
        switch ($page) {
            case Page::giroMoneyLandingPage:
                $this->renderAsJson($pageViewModel);
                break;
            case Page::creditCardLandingPage:
                $this->renderAsHtml($pageViewModel, $this->getPageTemplate($page));
                break;
            default:
                throw new PageViewModelRendererException("Could not render the page {$page}");
                break;
        }
    }

    private function getPageTemplate($page): ?string {
        return (new PageTemplateResolver())->getPageTemplatePath($page);
    }

    private function renderAsJson(PageViewModel $pageViewModel): void {
        header('Content-Type: application/json');
        echo json_encode($pageViewModel);
    }

    private function renderAsHtml(PageViewModel $pageViewModel, ?string $templatePath): void {
        if ($templatePath) {
            header('Content-Type: text/html');
            ob_start();
            include $templatePath;
            echo ob_get_clean();
        }
    }

}