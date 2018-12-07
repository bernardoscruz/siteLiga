<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm */
class __TwigTemplate_7ed1653b9143ccf13e61ddeb975819cac4e91abd697a8ec6e68c9f0d902e6701 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h4>
            <hr>
            ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        echo "        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "        </div>
    </div>
</div>

";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  60 => 16,  56 => 15,  52 => 13,  50 => 12,  45 => 10,  41 => 8,  37 => 7,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            {% partial 'sidebar' %}
        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">{{ this.page.title }}</h4>
            <hr>
            {% page %}
        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            {% partial 'sidebar' %}
        </div>
    </div>
</div>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/withSidebar.htm", "");
    }
}
