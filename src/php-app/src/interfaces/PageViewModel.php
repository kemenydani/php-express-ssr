<?php


namespace src\interfaces;


interface PageViewModel {
    public function setReactHTML(string $reactHTML): void;
    public function getReactHTML(): string;
}
