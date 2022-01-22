<?php


namespace src\ui\section;

use src\ui\teaser\Teaser;

final class PageSectionBuilder {

    public $id;
    public $title;
    public $subTitle;
    public $contents;
    public $layout;

    public function __construct() {
        $this->contents = new Contents();
    }

    public function withId(string $id): void {
        $this->id = $id;
    }

    public function withTitle(?string  $title): void {
        $this->title = $title;
    }

    public function withSubTitle(?string $subTitle): void {
        $this->subTitle = $subTitle;
    }

    public function withTeaser(Teaser $teaser): void {
        $this->contents->setTeaser($teaser);
    }

    public function withLayout(Layout $layout): void {
        $this->layout = $layout;
    }

    public function build(): PageSection {
        $model = new PageSection();
        $model->setId($this->id);
        $model->setTitle($this->title);
        $model->setSubTitle($this->subTitle);
        $model->setLayout($this->layout);
        $model->setTeaser($this->contents->teaser);
        return $model;
    }

}