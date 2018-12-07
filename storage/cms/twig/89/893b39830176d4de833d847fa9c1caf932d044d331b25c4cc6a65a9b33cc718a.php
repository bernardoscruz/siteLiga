<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/jumbotron1.htm */
class __TwigTemplate_c1cae5e3f05e19bc097198ac034cc6963baa15dd285a03190fffe8d489e58504 extends Twig_Template
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
<main>
    <!--Main layout-->
    <div class=\"container\">
        <!--First row-->
        <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"col-md-12\">
                <!--Card-->
                <div class=\"card\">

                    <!--Card image-->
                    <div class=\"view overlay hm-white-slight\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(28).jpg\" class=\"img-fluid\" alt=\"\">
                        <a href=\"#\">
                            <div class=\"mask\"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class=\"card-body text-center mb-3\">
                        <!--Title-->
                        <h3 class=\"card-title mt-2 pb-4\">
                            <strong>Empresas Juniores de Juiz de Fora</strong>
                        </h3>
                        <!--Text-->
                        <p class=\"card-text\">As Empresas Juniores que compõem e trabalham para sermos a maior da maré.
                        </p>
                        <a href=\"#\" class=\"btn btn-blue-grey btn-md\">Buscar</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        </div>
        <!--/.First row-->
        
        
";
        // line 40
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 41
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 42
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 43
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 44
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 45
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 46
        echo "
<div class=\"row mt-5 pt-4\">
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 49
            echo "
    <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "logoEmpresa", array()), "thumb", array(0 => 330, 1 => 250, 2 => "crop"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "logoEmpresa", array()), "description", array()), "html", null, true);
            echo "\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title\">
                            <strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "nome", array()), "html", null, true);
            echo "</strong>
                        </h4>
                        <!--Text-->
                        <p class=\"card-text\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "descricao", array()), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "contato", array()), "html", null, true);
            echo "\" target = \"_blank\" class=\"btn btn-blue-grey btn-md\">Contato</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>      
</main>

";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/jumbotron1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 76,  133 => 73,  119 => 65,  115 => 64,  109 => 61,  98 => 55,  90 => 49,  86 => 48,  82 => 46,  80 => 45,  78 => 44,  76 => 43,  74 => 42,  72 => 41,  70 => 40,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<main>
    <!--Main layout-->
    <div class=\"container\">
        <!--First row-->
        <div class=\"row wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"col-md-12\">
                <!--Card-->
                <div class=\"card\">

                    <!--Card image-->
                    <div class=\"view overlay hm-white-slight\">
                        <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(28).jpg\" class=\"img-fluid\" alt=\"\">
                        <a href=\"#\">
                            <div class=\"mask\"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class=\"card-body text-center mb-3\">
                        <!--Title-->
                        <h3 class=\"card-title mt-2 pb-4\">
                            <strong>Empresas Juniores de Juiz de Fora</strong>
                        </h3>
                        <!--Text-->
                        <p class=\"card-text\">As Empresas Juniores que compõem e trabalham para sermos a maior da maré.
                        </p>
                        <a href=\"#\" class=\"btn btn-blue-grey btn-md\">Buscar</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        </div>
        <!--/.First row-->
        
        
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"row mt-5 pt-4\">
{% for record in records %}

    <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.2s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"{{ record.logoEmpresa.thumb(330,250, 'crop') }}\" alt=\"{{ record.logoEmpresa.description }}\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title\">
                            <strong>{{ record.nome }}</strong>
                        </h4>
                        <!--Text-->
                        <p class=\"card-text\">{{ record.descricao }}</p>
                        <a href=\"{{ record.contato }}\" target = \"_blank\" class=\"btn btn-blue-grey btn-md\">Contato</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>

{% endfor %}
</div>      
</main>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/jumbotron1.htm", "");
    }
}
