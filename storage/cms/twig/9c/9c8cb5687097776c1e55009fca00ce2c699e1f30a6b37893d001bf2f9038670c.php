<?php

/* /var/www/html/personal/themes/portfolio/layouts/portfolio.htm */
class __TwigTemplate_a5f684fbed5eb7ef43eeaab9ad9d238e800966b5103a945d3d9fe1d14233b183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/bootstrapvalidator/dist/css/bootstrapvalidator.min.css", 2 => "assets/css/app.css"));
        // line 10
        echo "\">
</head>
<body>
\t<nav>
\t\t";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "\t
\t</nav>

\t<main>
\t\t";
        // line 18
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 19
        echo "\t</main>

\t<footer>
\t\t";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "\t</footer>

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
\t<script src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/bootstrap/dist/js/bootstrap.min.js", 1 => "assets/bootstrapvalidator/dist/js/bootstrapvalidator.min.js", 2 => "assets/jquery-smooth-scroll/jquery.smooth-scroll.min.js", 3 => "assets/js/app.js"));
        // line 31
        echo "\"></script>

\t";
        // line 33
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 34
        echo "\t";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 35
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/personal/themes/portfolio/layouts/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  75 => 34,  68 => 33,  64 => 31,  62 => 26,  57 => 23,  53 => 22,  48 => 19,  46 => 18,  37 => 14,  31 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<title>{{ this.page.title }}</title>*/
/* 	<link rel="stylesheet" href="{{ [*/
/* 		'assets/bootstrap/dist/css/bootstrap.min.css',*/
/* 		'assets/bootstrapvalidator/dist/css/bootstrapvalidator.min.css',*/
/* 		'assets/css/app.css'*/
/* 	]|theme }}">*/
/* </head>*/
/* <body>*/
/* 	<nav>*/
/* 		{% partial "nav" %}	*/
/* 	</nav>*/
/* */
/* 	<main>*/
/* 		{% page %}*/
/* 	</main>*/
/* */
/* 	<footer>*/
/* 		{% partial "footer" %}*/
/* 	</footer>*/
/* */
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/* 	<script src="{{ [*/
/* 		'assets/bootstrap/dist/js/bootstrap.min.js',*/
/* 		'assets/bootstrapvalidator/dist/js/bootstrapvalidator.min.js',*/
/* 		'assets/jquery-smooth-scroll/jquery.smooth-scroll.min.js',*/
/* 		'assets/js/app.js'*/
/* 	]|theme }}"></script>*/
/* */
/* 	{% framework extras %}*/
/* 	{% scripts %}*/
/* */
/* </body>*/
/* </html>*/
