<?php

/* C:\xampp\htdocs\siteLiga/themes/kevin-timber/partials/text-slider.htm */
class __TwigTemplate_dc26aa920180de008d881f8a9f9c4d30024f583555668ad2e3e485c8b33f9429 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
\t<div class=\"row wrap\">
\t\t<div class=\"col-md-12 gallery\">
\t\t\t<div class=\"camera_wrap camera_white_skin\" id=\"camera_wrap_1\">
\t\t\t\t<div data-thumb=\"\" data-src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/blank.gif");
        echo "\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Decola</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-thumb=\"\" data-src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/blank.gif");
        echo "\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Nois é doido</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-thumb=\"\" data-src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slides/blank.gif");
        echo "\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Avoa Code</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- #camera_wrap_1 -->
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\siteLiga/themes/kevin-timber/partials/text-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  37 => 10,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<div class=\"row wrap\">
\t\t<div class=\"col-md-12 gallery\">
\t\t\t<div class=\"camera_wrap camera_white_skin\" id=\"camera_wrap_1\">
\t\t\t\t<div data-thumb=\"\" data-src=\"{{ 'assets/images/slides/blank.gif'|theme }}\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Decola</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-thumb=\"\" data-src=\"{{ 'assets/images/slides/blank.gif'|theme }}\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Nois é doido</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div data-thumb=\"\" data-src=\"{{ 'assets/images/slides/blank.gif'|theme }}\">
\t\t\t\t\t<div class=\"img-responsive camera_caption fadeFromBottom\">
\t\t\t\t\t\t<h2>Avoa Code</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- #camera_wrap_1 -->
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\siteLiga/themes/kevin-timber/partials/text-slider.htm", "");
    }
}
