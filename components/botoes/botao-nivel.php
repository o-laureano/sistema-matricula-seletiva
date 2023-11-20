<?php

namespace components;

class BotaoNivel
{
  private $nivel;

  public function __construct(string $nivel)
  {
    $this->nivel = $nivel;
  }

  public function render(): string
  {
    $classes = "btn-check";
    $checked = $this->nivel === "graduação" ? "checked" : "";
    $color = $this->nivel === "graduação" ? "success" : "danger";

    return <<<HTML
      <input type="radio" class="{$classes}" name="options-outlined" id="{$this->nivel}-check" autocomplete="off" {$checked}>
      <label class="btn btn-outline-{$color}" for="{$this->nivel}-check">{$this->nivel}</label>
    HTML;
  }
}

?>
