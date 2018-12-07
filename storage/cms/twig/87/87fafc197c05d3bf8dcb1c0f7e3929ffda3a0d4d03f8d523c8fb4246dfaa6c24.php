<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sidebar.htm */
class __TwigTemplate_93146d9ddce83478a0e860c7f992537cefd06729d637b3dabb3b0de54b5e8054 extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"p-2\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "post")) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("getBlogCategories"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sideMenu"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  47 => 9,  44 => 7,  41 => 6,  36 => 5,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\" class=\"p-2\">
    {% if this.page.id == 'post' %}
        {% partial 'getBlogCategories' %}
    {% else %}
        {% partial 'sideMenu' %}
    {% endif %}

    {# Other side bar components #}
    {# can be added here as well #}
    {# Add as many as you like #}
</div>", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sidebar.htm", "");
    }
}
