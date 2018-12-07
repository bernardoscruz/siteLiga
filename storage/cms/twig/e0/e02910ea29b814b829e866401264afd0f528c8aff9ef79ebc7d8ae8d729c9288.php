<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm */
class __TwigTemplate_0d463236ef07b126a1d04e910e17d31f78cf94ced7214558880df708f735d211 extends Twig_Template
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
        echo "<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\"> 
        <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/liga/logoBranca.png");
        echo "\" alt=\"logo\" style=\"width: 190px; margin-top:10px;\"/>
    </a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 16
            echo "        ";
            $context["items"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array());
            // line 17
            echo "        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                <li class=\"nav-item ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array()))) ? ("active") : (""));
                echo "
                    ";
                // line 21
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown btn-group") : (""));
                echo "\"
                >
                    <a class=\"nav-link ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo "'dropdown-toggle' ";
                }
                echo "\"
                            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo " id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                // line 25
                echo "                       href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\"
                    >
                        ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "

                        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    echo "<span class=\"sr-only\">(current)</span>";
                }
                // line 30
                echo "                    </a>

                    ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 33
                    echo "                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\">
                            ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 35
                        echo "                                <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", array()), "html", null, true);
                        echo "</a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                        </div>
                    ";
                }
                // line 39
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Pesquisar\" aria-label=\"Pesquisar\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  129 => 41,  122 => 39,  118 => 37,  107 => 35,  103 => 34,  98 => 33,  96 => 32,  92 => 30,  88 => 29,  83 => 27,  77 => 25,  71 => 24,  65 => 23,  60 => 21,  55 => 20,  51 => 19,  47 => 17,  44 => 16,  42 => 15,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\"> 
        <img src=\"{{ 'assets/images/liga/logoBranca.png'|theme }}\" alt=\"logo\" style=\"width: 190px; margin-top:10px;\"/>
    </a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        {% if staticMenu.menuItems %}
        {% set items = staticMenu.menuItems %}
        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            {% for item in items %}
                <li class=\"nav-item {{ item.isActive or item.isChildActive ? 'active' : '' }}
                    {{ item.items ? 'dropdown btn-group' : '' }}\"
                >
                    <a class=\"nav-link {% if item.items %}'dropdown-toggle' {% endif %}\"
                            {% if item.items %} id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}
                       href=\"{{ item.url }}\"
                    >
                        {{ item.title }}

                        {% if item.items %}<span class=\"sr-only\">(current)</span>{% endif %}
                    </a>

                    {% if item.items %}
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
                            {% for child in item.items %}
                                <a class=\"dropdown-item\" href=\"{{ child.url }}\">{{ child.title }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
        {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Pesquisar\" aria-label=\"Pesquisar\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm", "");
    }
}
