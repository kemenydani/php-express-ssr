<?php


namespace src\ui\section;


use src\ui\teaser\Teaser;

final class PageSection {

    public $id;
    public $title;
    public $subTitle;
    public $contents;
    public $layout;

    public function __construct() {
        $this->contents = new Contents();
    }

    public function setId(?string $id): void {
        $this->id = $id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(?string  $title): void {
        $this->title = $title;
    }

    public function getSubTitle(): ?string {
        return $this->subTitle;
    }

    public function setSubTitle(?string $subTitle): void {
        $this->subTitle = $subTitle;
    }

    public function getContents(): Contents {
        return $this->contents;
    }

    public function setTeaser(?Teaser $teaser): void {
        $this->contents->setTeaser($teaser);
    }

    public function setLayout(?Layout $layout): void {
        $this->layout = $layout;
    }

}