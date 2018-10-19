<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/kevin-timber/partials/menu.htm */
class __TwigTemplate_a3789fe4ae3be2e93bb5987c138da5d48280141970efa34a68217564838dbf7e extends Twig_Template
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
        echo "<div id=\"menuF\" class=\"default\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"logo col-md-4\">
\t\t\t\t<div style=\"margin-bottom:-200px; position: relative;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/liga/logoBranca.png");
        echo "\" alt=\"logo\" style=\"width: 200px;\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"navmenu\" style=\"text-align: center;\">
\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#home\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/siteLiga/liga\">Liga</a></li>
\t\t\t\t\t\t<li><a href=\"#project\">Empresas Juniores</a></li>
\t\t\t\t\t\t<li><a href=\"#news\">Programas</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"#contact\">Blog</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"#contact\">Contato</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/kevin-timber/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"menuF\" class=\"default\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"logo col-md-4\">
\t\t\t\t<div style=\"margin-bottom:-200px; position: relative;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/liga/logoBranca.png'|theme }}\" alt=\"logo\" style=\"width: 200px;\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"navmenu\" style=\"text-align: center;\">
\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#home\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/siteLiga/liga\">Liga</a></li>
\t\t\t\t\t\t<li><a href=\"#project\">Empresas Juniores</a></li>
\t\t\t\t\t\t<li><a href=\"#news\">Programas</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"#contact\">Blog</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"#contact\">Contato</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/kevin-timber/partials/menu.htm", "");
    }
}
