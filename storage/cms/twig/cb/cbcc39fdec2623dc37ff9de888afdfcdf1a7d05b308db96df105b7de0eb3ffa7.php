<?php

/* C:\xampp\htdocs\siteLiga/themes/kevin-timber/layouts/liga.htm */
class __TwigTemplate_b0da4a88c419cf927247170c7d76c4e5ae840469ebbe825b32b5fead9877acd7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
\t\t<title>Liga</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!-- Styles -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/camera.css", 3 => "assets/css/slicknav.css", 4 => "assets/css/prettyPhoto.css", 5 => "assets/css/style.css"));
        // line 13
        echo "\">
\t\t                                                 
\t\t<!-- Scripts -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/jquery-1.8.3.min.js", 1 => "assets/js/jquery.mobile.customized.min.js", 2 => "assets/js/jquery.easing.1.3.js", 3 => "assets/js/camera.min.js", 4 => "assets/js/myscript.js", 5 => "assets/js/sorting.js", 6 => "assets/js/jquery.isotope.js", 7 => "assets/js/jquery.prettyPhoto.js", 8 => "assets/js/bootstrap.min.js", 9 => "assets/js/jquery.slicknav.js"));
        // line 25
        echo "\"></script>
\t\t<script id=\"tinyhippos-injected\">if (window.top.ripple) { window.top.ripple(\"bootstrap\").inject(window, document); }</script><!--<![endif]-->
\t\t<script>
\t\t\tjQuery(function(){
\t\t\t\t\tjQuery('#camera_wrap_1').camera({
\t\t\t\t\ttransPeriod: 500,
\t\t\t\t\ttime: 3000,
\t\t\t\t\theight: '490px',
\t\t\t\t\tthumbnails: false,
\t\t\t\t\tpagination: true,
\t\t\t\t\tplayPause: false,
\t\t\t\t\tloader: false,
\t\t\t\t\tnavigation: false,
\t\t\t\t\thover: false
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t
\t</head>
\t<body>
    
    <!--home start-->
    <div id=\"home\">
        <div class=\"headerLine\">
\t\t\t<div class=\"teste\">
\t        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("text-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "\t\t</div>
\t    </div>
\t\t";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("first-heading"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "    </div>
    
    <!--about start-->    
    <div id=\"about\">
    \t";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "    </div>
    
    <!--project start-->    
    <div id=\"project\">    \t
\t\t";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("project"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "    </div>    
    
    <!--news start-->
    <div id=\"news\">
    \t";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "    </div>
    
    <!--contact start-->
    <div id=\"contact\">
    \t";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact-form-details"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "\t\t<div class=\"line6\">
\t\t    <!-- Google Maps -->
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092\" width=\"100%\" height=\"750\" frameborder=\"0\" style=\"border:0\"></iframe>\t
\t\t</div>
\t\t<div class=\"container\">
\t\t\t";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact-text"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "\t\t</div>
\t\t<div class=\"line7\">
\t\t\t<!-- Subscribe -->
\t\t\t";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("subscribe"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "\t\t</div>
\t\t<div class=\"lineBlack\">
\t\t\t";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "\t\t</div>
    </div>\t\t
\t\t
\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\$(\".bhide\").click(function(){
\t\t\t\t\$(\".hideObj\").slideDown();
\t\t\t\t\$(this).hide(); //.attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".bhide2\").click(function(){
\t\t\t\t\$(\".container.hideObj2\").slideDown();
\t\t\t\t\$(this).hide(); // .attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\t
\t\t\t\$('.heart').mouseover(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
\t\t\t\t}).mouseout(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
\t\t\t\t});
\t\t\t\t
\t\t\t\tfunction sdf_FTS(_number,_decimal,_separator)
\t\t\t\t{
\t\t\t\tvar decimal=(typeof(_decimal)!='undefined')?_decimal:2;
\t\t\t\tvar separator=(typeof(_separator)!='undefined')?_separator:'';
\t\t\t\tvar r=parseFloat(_number)
\t\t\t\tvar exp10=Math.pow(10,decimal);
\t\t\t\tr=Math.round(r*exp10)/exp10;
\t\t\t\trr=Number(r).toFixed(decimal).toString().split('.');
\t\t\t\tb=rr[0].replace(/(\\d{1,3}(?=(\\d{3})+(?:\\.\\d|\\b)))/g,\"\\\$1\"+separator);
\t\t\t\tr=(rr[1]?b+'.'+rr[1]:b);

\t\t\t\treturn r;
}
\t\t\t\t
\t\t\tsetTimeout(function(){
\t\t\t\t\t\$('#counter').text('0');
\t\t\t\t\t\$('#counter1').text('0');
\t\t\t\t\t\$('#counter2').text('0');
\t\t\t\t\tsetInterval(function(){
\t\t\t\t\t\t
\t\t\t\t\t\tvar curval=parseInt(\$('#counter').text());
\t\t\t\t\t\tvar curval1=parseInt(\$('#counter1').text().replace(' ',''));
\t\t\t\t\t\tvar curval2=parseInt(\$('#counter2').text());
\t\t\t\t\t\tif(curval<=707){
\t\t\t\t\t\t\t\$('#counter').text(curval+1);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval1<=12280){
\t\t\t\t\t\t\t\$('#counter1').text(sdf_FTS((curval1+20),0,' '));
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval2<=245){
\t\t\t\t\t\t\t\$('#counter2').text(curval2+1);
\t\t\t\t\t\t}
\t\t\t\t\t}, 2);
\t\t\t\t\t
\t\t\t\t}, 500);
\t\t\t});
\t</script>
\t<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tjQuery('#menu').slicknav();
\t\t
\t});
\t</script>
\t
\t<script type=\"text/javascript\">
    \$(document).ready(function(){
       /*
        var \$menu = \$(\"#menuF\");
            
        \$(window).scroll(function(){
            if ( \$(this).scrollTop() > 100 && \$menu.hasClass(\"default\") ){
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"default\")
                           .addClass(\"fixed transbg\")
                           .fadeIn('fast');
                });
            } else if(\$(this).scrollTop() <= 100 && \$menu.hasClass(\"fixed\")) {
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"fixed transbg\")
                           .addClass(\"default\")
                           .fadeIn('fast');
                });
            }
        });
\t\t*/
\t});
    //jQuery
\t</script>
\t<script>
\t\t/*menu*/
\t\tfunction calculateScroll() {
\t\t\tvar contentTop      =   [];
\t\t\tvar contentBottom   =   [];
\t\t\tvar winTop      =   \$(window).scrollTop();
\t\t\tvar rangeTop    =   200;
\t\t\tvar rangeBottom =   500;
\t\t\t\$('.navmenu').find('a').each(function(){
\t\t\t\tcontentTop.push( \$( \$(this).attr('href') ).offset().top );
\t\t\t\tcontentBottom.push( \$( \$(this).attr('href') ).offset().top + \$( \$(this).attr('href') ).height() );
\t\t\t})
\t\t\t\$.each( contentTop, function(i){
\t\t\t\tif ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
\t\t\t\t\t\$('.navmenu li')
\t\t\t\t\t.removeClass('active')
\t\t\t\t\t.eq(i).addClass('active');\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t};
\t\t
\t\t\$(document).ready(function(){
\t\t\tcalculateScroll();
\t\t\t\$(window).scroll(function(event) {
\t\t\t\tcalculateScroll();
\t\t\t});
\t\t\t\$('.navmenu ul li a').click(function() {  
\t\t\t\t\$('html, body').animate({scrollTop: \$(this.hash).offset().top - 80}, 800);
\t\t\t\treturn false;
\t\t\t});
\t\t});\t\t
\t</script>\t
\t<script>

\t\tjQuery(document).ready(function(){
\t\t\tjQuery(\".pretty a[rel^='prettyPhoto']\").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
\t\t\t
\t\t});
\t</script>
\t</body>
\t
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\siteLiga/themes/kevin-timber/layouts/liga.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 88,  149 => 87,  145 => 85,  141 => 84,  136 => 81,  132 => 80,  125 => 75,  121 => 74,  115 => 70,  111 => 69,  105 => 65,  101 => 64,  95 => 60,  91 => 59,  85 => 55,  81 => 54,  77 => 52,  72 => 51,  68 => 50,  41 => 25,  39 => 16,  34 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
\t\t<title>Liga</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!-- Styles -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ ['assets/css/bootstrap.css', 
\t\t                                                 'assets/css/font-awesome.css', 
\t\t                                                 'assets/css/camera.css', 
\t\t                                                 'assets/css/slicknav.css', 
\t\t                                                 'assets/css/prettyPhoto.css', 
\t\t                                                 'assets/css/style.css']|theme }}\">
\t\t                                                 
\t\t<!-- Scripts -->
\t\t<script type=\"text/javascript\" src=\"{{ ['assets/js/jquery-1.8.3.min.js', 
\t\t                                        'assets/js/jquery.mobile.customized.min.js', 
\t\t                                        'assets/js/jquery.easing.1.3.js', 
\t\t                                        'assets/js/camera.min.js', 
\t\t                                        'assets/js/myscript.js', 
\t\t                                        'assets/js/sorting.js', 
\t\t                                        'assets/js/jquery.isotope.js', 
\t\t                                        'assets/js/jquery.prettyPhoto.js', 
\t\t                                        'assets/js/bootstrap.min.js', 
\t\t                                        'assets/js/jquery.slicknav.js']|theme }}\"></script>
\t\t<script id=\"tinyhippos-injected\">if (window.top.ripple) { window.top.ripple(\"bootstrap\").inject(window, document); }</script><!--<![endif]-->
\t\t<script>
\t\t\tjQuery(function(){
\t\t\t\t\tjQuery('#camera_wrap_1').camera({
\t\t\t\t\ttransPeriod: 500,
\t\t\t\t\ttime: 3000,
\t\t\t\t\theight: '490px',
\t\t\t\t\tthumbnails: false,
\t\t\t\t\tpagination: true,
\t\t\t\t\tplayPause: false,
\t\t\t\t\tloader: false,
\t\t\t\t\tnavigation: false,
\t\t\t\t\thover: false
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t
\t</head>
\t<body>
    
    <!--home start-->
    <div id=\"home\">
        <div class=\"headerLine\">
\t\t\t<div class=\"teste\">
\t        {% partial 'menu' %}
\t\t\t{% partial 'text-slider' %}
\t\t</div>
\t    </div>
\t\t{% partial 'first-heading' %}
    </div>
    
    <!--about start-->    
    <div id=\"about\">
    \t{% partial 'about' %}
    </div>
    
    <!--project start-->    
    <div id=\"project\">    \t
\t\t{% partial 'project' %}
    </div>    
    
    <!--news start-->
    <div id=\"news\">
    \t{% partial 'news' %}
    </div>
    
    <!--contact start-->
    <div id=\"contact\">
    \t{% partial 'contact-form-details' %}
\t\t<div class=\"line6\">
\t\t    <!-- Google Maps -->
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092\" width=\"100%\" height=\"750\" frameborder=\"0\" style=\"border:0\"></iframe>\t
\t\t</div>
\t\t<div class=\"container\">
\t\t\t{% partial 'contact-text' %}
\t\t</div>
\t\t<div class=\"line7\">
\t\t\t<!-- Subscribe -->
\t\t\t{% partial 'subscribe' %}
\t\t</div>
\t\t<div class=\"lineBlack\">
\t\t\t{% partial 'footer' %}
\t\t</div>
    </div>\t\t
\t\t
\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\$(\".bhide\").click(function(){
\t\t\t\t\$(\".hideObj\").slideDown();
\t\t\t\t\$(this).hide(); //.attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".bhide2\").click(function(){
\t\t\t\t\$(\".container.hideObj2\").slideDown();
\t\t\t\t\$(this).hide(); // .attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\t
\t\t\t\$('.heart').mouseover(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
\t\t\t\t}).mouseout(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
\t\t\t\t});
\t\t\t\t
\t\t\t\tfunction sdf_FTS(_number,_decimal,_separator)
\t\t\t\t{
\t\t\t\tvar decimal=(typeof(_decimal)!='undefined')?_decimal:2;
\t\t\t\tvar separator=(typeof(_separator)!='undefined')?_separator:'';
\t\t\t\tvar r=parseFloat(_number)
\t\t\t\tvar exp10=Math.pow(10,decimal);
\t\t\t\tr=Math.round(r*exp10)/exp10;
\t\t\t\trr=Number(r).toFixed(decimal).toString().split('.');
\t\t\t\tb=rr[0].replace(/(\\d{1,3}(?=(\\d{3})+(?:\\.\\d|\\b)))/g,\"\\\$1\"+separator);
\t\t\t\tr=(rr[1]?b+'.'+rr[1]:b);

\t\t\t\treturn r;
}
\t\t\t\t
\t\t\tsetTimeout(function(){
\t\t\t\t\t\$('#counter').text('0');
\t\t\t\t\t\$('#counter1').text('0');
\t\t\t\t\t\$('#counter2').text('0');
\t\t\t\t\tsetInterval(function(){
\t\t\t\t\t\t
\t\t\t\t\t\tvar curval=parseInt(\$('#counter').text());
\t\t\t\t\t\tvar curval1=parseInt(\$('#counter1').text().replace(' ',''));
\t\t\t\t\t\tvar curval2=parseInt(\$('#counter2').text());
\t\t\t\t\t\tif(curval<=707){
\t\t\t\t\t\t\t\$('#counter').text(curval+1);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval1<=12280){
\t\t\t\t\t\t\t\$('#counter1').text(sdf_FTS((curval1+20),0,' '));
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval2<=245){
\t\t\t\t\t\t\t\$('#counter2').text(curval2+1);
\t\t\t\t\t\t}
\t\t\t\t\t}, 2);
\t\t\t\t\t
\t\t\t\t}, 500);
\t\t\t});
\t</script>
\t<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tjQuery('#menu').slicknav();
\t\t
\t});
\t</script>
\t
\t<script type=\"text/javascript\">
    \$(document).ready(function(){
       /*
        var \$menu = \$(\"#menuF\");
            
        \$(window).scroll(function(){
            if ( \$(this).scrollTop() > 100 && \$menu.hasClass(\"default\") ){
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"default\")
                           .addClass(\"fixed transbg\")
                           .fadeIn('fast');
                });
            } else if(\$(this).scrollTop() <= 100 && \$menu.hasClass(\"fixed\")) {
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"fixed transbg\")
                           .addClass(\"default\")
                           .fadeIn('fast');
                });
            }
        });
\t\t*/
\t});
    //jQuery
\t</script>
\t<script>
\t\t/*menu*/
\t\tfunction calculateScroll() {
\t\t\tvar contentTop      =   [];
\t\t\tvar contentBottom   =   [];
\t\t\tvar winTop      =   \$(window).scrollTop();
\t\t\tvar rangeTop    =   200;
\t\t\tvar rangeBottom =   500;
\t\t\t\$('.navmenu').find('a').each(function(){
\t\t\t\tcontentTop.push( \$( \$(this).attr('href') ).offset().top );
\t\t\t\tcontentBottom.push( \$( \$(this).attr('href') ).offset().top + \$( \$(this).attr('href') ).height() );
\t\t\t})
\t\t\t\$.each( contentTop, function(i){
\t\t\t\tif ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
\t\t\t\t\t\$('.navmenu li')
\t\t\t\t\t.removeClass('active')
\t\t\t\t\t.eq(i).addClass('active');\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t};
\t\t
\t\t\$(document).ready(function(){
\t\t\tcalculateScroll();
\t\t\t\$(window).scroll(function(event) {
\t\t\t\tcalculateScroll();
\t\t\t});
\t\t\t\$('.navmenu ul li a').click(function() {  
\t\t\t\t\$('html, body').animate({scrollTop: \$(this.hash).offset().top - 80}, 800);
\t\t\t\treturn false;
\t\t\t});
\t\t});\t\t
\t</script>\t
\t<script>

\t\tjQuery(document).ready(function(){
\t\t\tjQuery(\".pretty a[rel^='prettyPhoto']\").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
\t\t\t
\t\t});
\t</script>
\t</body>
\t
</html>", "C:\\xampp\\htdocs\\siteLiga/themes/kevin-timber/layouts/liga.htm", "");
    }
}
