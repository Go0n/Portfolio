<?php

/* /var/www/html/personal/themes/portfolio/pages/home.htm */
class __TwigTemplate_48c8c84edc14c3170409cc7fb121aeaa268ee86816ea99e45b461a5697cdcae1 extends Twig_Template
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
        echo "<section>
\t<div id=\"home\" class=\"jumbotron\">
\t  <div class=\"container\">
\t    <h1 class=\"display-3\">Welcome</h1>
\t\t";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("home.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "\t  </div>
\t</div>
</section>

<div class=\"section\">
\t<div class=\"container pull-left\">
\t\t
\t</div>
</div>

<div class=\"clearfix\"></div>

<div class=\"container\">

\t<section id=\"Projects\">
\t\t<div class=\"row\">
\t\t  <div class=\"col-md-4\">
\t\t    <div class=\"card card-block\">
\t\t      <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\" style=\"text-align:center\"></span>
\t\t      <h4 class=\"card-title\">Why</h4>
\t\t      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"col-md-4\">
\t\t    <div class=\"card card-block\">
\t\t      <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\" style=\"text-align:center\"></span>
\t\t      <h4 class=\"card-title\">Choose</h4>
\t\t      <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"col-md-4\">
\t\t    <div class=\"card card-block\">
\t\t      <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\" style=\"text-align:center\"></span>
\t\t      <h4 class=\"card-title\">Me</h4>
\t\t      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
\t\t    </div>
\t\t  </div>
\t\t</div>
\t</section>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/personal/themes/portfolio/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section>*/
/* 	<div id="home" class="jumbotron">*/
/* 	  <div class="container">*/
/* 	    <h1 class="display-3">Welcome</h1>*/
/* 		{% content "home.md" %}*/
/* 	  </div>*/
/* 	</div>*/
/* </section>*/
/* */
/* <div class="section">*/
/* 	<div class="container pull-left">*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
/* */
/* <div class="container">*/
/* */
/* 	<section id="Projects">*/
/* 		<div class="row">*/
/* 		  <div class="col-md-4">*/
/* 		    <div class="card card-block">*/
/* 		      <span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="text-align:center"></span>*/
/* 		      <h4 class="card-title">Why</h4>*/
/* 		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>*/
/* 		    </div>*/
/* 		  </div>*/
/* */
/* 		  <div class="col-md-4">*/
/* 		    <div class="card card-block">*/
/* 		      <span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="text-align:center"></span>*/
/* 		      <h4 class="card-title">Choose</h4>*/
/* 		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>*/
/* 		    </div>*/
/* 		  </div>*/
/* */
/* 		  <div class="col-md-4">*/
/* 		    <div class="card card-block">*/
/* 		      <span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="text-align:center"></span>*/
/* 		      <h4 class="card-title">Me</h4>*/
/* 		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>*/
/* 		    </div>*/
/* 		  </div>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* </div>*/
