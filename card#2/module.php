<?php
/**
* Module by Gard
*
*
*/
class Gpack extends Module
{

    function init() {

        //$this->registry->theme->addFooterJS("validation", "path/to/js");

        //$this->registry->theme->addCSS("jqueryui", "common/jqueryui/jquery-ui.min.css");

        $this->name         =   "Gpack";
        $this->version      =   "0.0.1";
        $this->description  =   "Module pack by Gard";
        $this->author       =   "Gard Mikael Fjeldavli";

        // Register widgets
        $this->registry->widgets->addWidget("gpack","gpack-hero-image", "Hero", array(
            array(
                "name" => "Bilde",
                "field" => "widget_content_1",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Height (in px)",
                "field" => "widget_content_2",
                "type" => "text",
                "default" => "500",
            ),
            array(
                "name" => "Inner content",
                "field" => "widget_content_3",
                "type" => "editor2",
                "default" => "",
            ),
        ));
        $this->registry->widgets->addWidget("gpack","gpack-sticky-btns", "Sticky Side Nav", array(
            array(
                "name" => "Tekst",
                "field" => "widget_content_1",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Ikon-klassenavn (fontawesome)",
                "field" => "widget_content_2",
                "type" => "text",
                "default" => "500",
            ),
            array(
                "name" => "Farge",
                "field" => "widget_content_3",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Lenke",
                "field" => "widget_content_4",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Tekst 2",
                "field" => "widget_content_5",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Ikon-klassenavn (fontawesome) 2",
                "field" => "widget_content_6",
                "type" => "text",
                "default" => "500",
            ),
            array(
                "name" => "Farge 2",
                "field" => "widget_content_7",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Lenke 2",
                "field" => "widget_content_8",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Tekst 3",
                "field" => "widget_content_9",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Ikon-klassenavn (fontawesome) 3",
                "field" => "widget_content_10",
                "type" => "text",
                "default" => "500",
            ),
            array(
                "name" => "Farge 3",
                "field" => "widget_content_11",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Lenke 3",
                "field" => "widget_content_12",
                "type" => "text",
                "default" => "",
            ),
        ));
        $this->registry->widgets->addWidget("gpack","gpack-card-animate", "Gpack Animate Card", array(
            array(
                "name" => "Bilde",
                "field" => "widget_content_1",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Card color",
                "field" => "widget_content_2",
                "type" => "text",
                "default" => "#abc",
            ),
            array(
                "name" => "Name",
                "field" => "widget_content_3",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Title",
                "field" => "widget_content_4",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Email",
                "field" => "widget_content_5",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Phonenumber",
                "field" => "widget_content_6",
                "type" => "text",
                "default" => "",
            ),
            array(
                "name" => "Description",
                "field" => "widget_content_7",
                "type" => "editor",
                "default" => "",
            ),
        ));

    }

    function widget($widget) {

        if ($widget['widget_name'] === "gpack-hero-image") {

            $hero_image = $widget['widget_content_1'];
            $hero_height = $widget['widget_content_2'];
            $hero_inner_content = $widget['widget_content_3'];

            include("hero.php");
        } if ($widget['widget_name'] === "gpack-sticky-btns") {

            $btn_text1 = $widget['widget_content_1'];
            $btn_icon1 = $widget['widget_content_2'];
            $btn_color1 = $widget['widget_content_3'];
            $btn_link1 = $widget['widget_content_4'];

            $btn_text2 = $widget['widget_content_5'];
            $btn_icon2 = $widget['widget_content_6'];
            $btn_color2 = $widget['widget_content_7'];
            $btn_link2 = $widget['widget_content_8'];

            $btn_text3 = $widget['widget_content_9'];
            $btn_icon3 = $widget['widget_content_10'];
            $btn_color3 = $widget['widget_content_11'];
            $btn_link3 = $widget['widget_content_12'];

            include("stickysidebuttons.php");
        } if ($widget['widget_name'] === "gpack-empolyee-card-animate") {
          $card_image = $widget['widget_content_1'];
          $card_color = $widget['widget_content_2'];
          $card_name = $widget['widget_content_3'];
          $card_jobtitle = $widget['widget_content_4'];
          $card_email = $widget['widget_content_5'];
          $card_phone = $widget['widget_content_6'];
          $card_description = $widget['widget_content_7'];

        }

    }
}

?>
