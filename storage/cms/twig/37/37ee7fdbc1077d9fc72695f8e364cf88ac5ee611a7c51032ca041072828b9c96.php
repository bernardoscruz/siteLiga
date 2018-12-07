<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm */
class __TwigTemplate_35600699e6a92299261fe4e8daec6063eb1e648cbbbdf542047651165f8330cb extends Twig_Template
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
        $context["links"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "resetMenu", array(0 => ($context["getMenu"] ?? null)), "method");
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 3
            echo "    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">";
            // line 5
            echo twig_escape_filter($this->env, twig_replace_filter(($context["subMenu"] ?? null), array("-" => " ")), "html", null, true);
            echo "</h4>
        <div class=\"list-group\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\" class=\"list-group-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()) == twig_get_attribute($this->env, $this->source, $context["item"], "title", array()))) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  40 => 8,  36 => 7,  31 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set links = staticMenu.resetMenu( getMenu ) %}
{% if staticMenu.menuItems %}
    
    <div class=\"widget-wrapper\">
        <h4 class=\"dark-grey-text\">{{ subMenu|replace({'-': ' '}) }}</h4>
        <div class=\"list-group\">
            {% for item in staticMenu.menuItems %}
                <a href=\"{{ item.url }}\" class=\"list-group-item {% if this.page.title == item.title %}active{% endif %}\">{{ item.title }}</a>
            {% endfor %}
        </div>
    </div>

{% endif %}", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/sideMenu.htm", "");
    }
}
