<?php

/* C:\xampp\htdocs\portalLiga\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/noSidebar1.htm */
class __TwigTemplate_db699f5769b169d6dcb1ea79eb06c9f6daa727470bcb20d599a58dda636adf15 extends Twig_Template
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
<div class=\"container py-5\">
    
    ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 7
        echo "    <div class=\"lt-row row\">
        <div class=\"lt-col col s12\">
          <h2 class=\"lt-title\">Diz aê!</h2>
          <p class=\"flow-text\">Quer tirar uma ideia do papel? Quer saber mais sobre Juiz de Fora? Ou simplesmente mandar um bom dia? </p>
        </div>
      </div>
      
      <div class=\"lt-vertical-spacer\"></div>
      
      <form class=\"col s12\">
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s6\">
            <input type=\"text\" class=\"validate\" id=\"first_name\">
            <label for=\"first_name\" class=\"active\">Nome</label>
          </div>
          <div class=\"input-field lt-col col s6\">
            <input type=\"text\" id=\"last_name\">
            <label for=\"last_name\">Sobrenome</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <input type=\"email\" class=\"validate\" id=\"email\">
            <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <select multiple>
              <option value=\"\" disabled selected>O que deseja?</option>
              <option value=\"1\">Projeto</option>
              <option value=\"2\">Bench</option>
              <option value=\"3\">Outro</option>
            </select>
            <label>Assunto</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
            <label for=\"textarea1\">Mensagem</label>
          </div>
        </div>
        
        <!--
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <div class=\"file-field input-field\">
              <div class=\"btn\">
                <span>File</span>
                <input type=\"file\" multiple>
              </div>
              <div class=\"file-path-wrapper\">
                <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
              </div>
            </div>
          </div>
        </div>
        
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <label for=\"datepicker\">Set the Date</label>
            <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
          </div>
        </div>
       
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
            <label for=\"filled-in-box\">Send copy to my email</label>
          </div>
        </div>
         -->
        <div class=\"lt-vertical-spacer\"></div>
      
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Enviar <i class=\"material-icons right\"></i></button>
          </div>
        </div>
      </form>
    
</div>

";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/noSidebar1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 91,  38 => 7,  36 => 6,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container py-5\">
    
    {% page %}
    <div class=\"lt-row row\">
        <div class=\"lt-col col s12\">
          <h2 class=\"lt-title\">Diz aê!</h2>
          <p class=\"flow-text\">Quer tirar uma ideia do papel? Quer saber mais sobre Juiz de Fora? Ou simplesmente mandar um bom dia? </p>
        </div>
      </div>
      
      <div class=\"lt-vertical-spacer\"></div>
      
      <form class=\"col s12\">
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s6\">
            <input type=\"text\" class=\"validate\" id=\"first_name\">
            <label for=\"first_name\" class=\"active\">Nome</label>
          </div>
          <div class=\"input-field lt-col col s6\">
            <input type=\"text\" id=\"last_name\">
            <label for=\"last_name\">Sobrenome</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <input type=\"email\" class=\"validate\" id=\"email\">
            <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <select multiple>
              <option value=\"\" disabled selected>O que deseja?</option>
              <option value=\"1\">Projeto</option>
              <option value=\"2\">Bench</option>
              <option value=\"3\">Outro</option>
            </select>
            <label>Assunto</label>
          </div>
        </div>
        <div class=\"lt-row row\">
          <div class=\"input-field lt-col col s12\">
            <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
            <label for=\"textarea1\">Mensagem</label>
          </div>
        </div>
        
        <!--
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <div class=\"file-field input-field\">
              <div class=\"btn\">
                <span>File</span>
                <input type=\"file\" multiple>
              </div>
              <div class=\"file-path-wrapper\">
                <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
              </div>
            </div>
          </div>
        </div>
        
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <label for=\"datepicker\">Set the Date</label>
            <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
          </div>
        </div>
       
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
            <label for=\"filled-in-box\">Send copy to my email</label>
          </div>
        </div>
         -->
        <div class=\"lt-vertical-spacer\"></div>
      
        <div class=\"lt-row row\">
          <div class=\"lt-col col s12\">
            <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Enviar <i class=\"material-icons right\"></i></button>
          </div>
        </div>
      </form>
    
</div>

{% partial 'site/footer' %}", "C:\\xampp\\htdocs\\portalLiga\\siteLiga/themes/zanor-zanor-mdb-loaded/layouts/noSidebar1.htm", "");
    }
}
