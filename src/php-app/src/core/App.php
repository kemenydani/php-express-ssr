<?php


namespace src\core;

use Throwable;

final class App {

    public $pageControllerResolver;
    public $pageViewModelRenderer;
    public $page;

    public function __construct(string $page) {
        $this->page = $page;
        $this->pageControllerResolver = new PageControllerResolver();
        $this->pageViewModelRenderer = new PageViewModelRenderer();
    }

    public function run(): void {
        try {
            $pageController = $this->pageControllerResolver->getPageController($this->page);
            if($pageController) {
                $pageViewModel = $pageController->getPageViewModel();
                $this->pageViewModelRenderer->renderPageViewModel($this->page, $pageViewModel);
            }
        } catch (Throwable $throwable) {
            var_dump($throwable->getMessage());
        }
    }


}