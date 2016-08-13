<?php

/* /var/www/html/personal/themes/portfolio/partials/footer.htm */
class __TwigTemplate_85378edbce2f08c28c9649da45203de4a08e5eb4af2c22bbd69a7f86abd8418b extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-static-bottom\">
\t<div class=\"container\">
\t\t<p class=\"navbar-text pull-left\">Site built by Robert DeSarbo</p>
\t\t<p class=\"navbar-text pull-right\">&copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Portfolio</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/personal/themes/portfolio/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div class="navbar navbar-default navbar-static-bottom">*/
/* 	<div class="container">*/
/* 		<p class="navbar-text pull-left">Site built by Robert DeSarbo</p>*/
/* 		<p class="navbar-text pull-right">&copy; {{ "now"|date("Y") }} Portfolio</p>*/
/* </div>*/
