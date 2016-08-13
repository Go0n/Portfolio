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
        echo "<section class=\"hero\" id=\"home\">
  <div class=\"inner\">
    <div class=\"copy\">
    \t<h1 class=\"display-3\">Welcome</h1>
\t\t";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "\t</div>
  </div>
</section>

<div class=\"section\">
\t<div class=\"container pull-left\">
\t\t
\t</div>
</div>

<div class=\"clearfix\"></div>

<div class=\"container\">

\t<section id=\"About\">
\t\t<div class=\"content\">
\t\t\t<h1 class=\"display-3\">About</h1>
\t\t\t<hr>
\t\t\t";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("about.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 25
        echo "\t\t</div>
\t</section>

\t<div class=\"clearfix separator\"><br/></div>

\t<section id=\"Projects\">
\t\t<div class=\"content\">
\t\t\t<h1 class=\"display-3\">Projects</h1>
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-md-4\">
\t\t\t    <div class=\"card card-block\">
\t\t\t      <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\" style=\"text-align:center\"></span>
\t\t\t      <h4 class=\"card-title\">Gather</h4>
\t\t\t      <p class=\"card-text\">Reviewing the project and setting acceptable goals will help get us on the same page.</p>
\t\t\t    </div>
\t\t\t  </div>

\t\t\t  <div class=\"col-md-4\">
\t\t\t    <div class=\"card card-block\">
\t\t\t      <span class=\"glyphicon glyphicon-fire\" aria-hidden=\"true\" style=\"text-align:center; color:#E04646\"></span>
\t\t\t      <h4 class=\"card-title\">Forge</h4>
\t\t\t      <p class=\"card-text\">A proven development process which will get your projects completed on time.</p>
\t\t\t    </div>
\t\t\t  </div>

\t\t\t  <div class=\"col-md-4\">
\t\t\t    <div class=\"card card-block\">
\t\t\t      <span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\" style=\"text-align:center\"></span>
\t\t\t      <h4 class=\"card-title\">Deploy</h4>
\t\t\t      <p class=\"card-text\">Completing and delivering the project.</p>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<div class=\"clearfix separator\"><br/></div>

\t<section id=\"Resume\">
\t\t<div class=\"content\">
\t\t\t<h1 class=\"display-3\">Resume</h1>
\t\t\t<hr>
\t\t\tRESUME HERE
\t\t</div>
\t</section>

\t<div class=\"clearfix separator\"><br/></div>

\t<section id=\"Contact\">
\t\t\t<div class=\"content\">
\t\t\t<h1 class=\"display-3\">Contact Me</h1>
\t\t\t<hr>

\t\t\t<form class=\"well form-horizontal\" action=\"/\" method=\"post\"  id=\"contact_form\">
\t\t\t<fieldset>

\t\t\t\t<!-- Text input-->

\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\">First Name</label>  
\t\t\t\t  <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t  <div class=\"input-group\">
\t\t\t\t  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t  <input  name=\"first_name\" placeholder=\"First Name\" class=\"form-control\"  type=\"text\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t\t<!-- Text input-->

\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\" >Last Name</label> 
\t\t\t\t    <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t  <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t  <input name=\"last_name\" placeholder=\"Last Name\" class=\"form-control\"  type=\"text\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t\t<!-- Text input-->
\t\t\t\t       <div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\">E-Mail</label>  
\t\t\t\t    <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t  <input name=\"email\" placeholder=\"E-Mail Address\" class=\"form-control\"  type=\"text\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>


\t\t\t\t<!-- Text input-->
\t\t\t\t       
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\">Phone #</label>  
\t\t\t\t    <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
\t\t\t\t  <input name=\"phone\" placeholder=\"(845)555-1212\" class=\"form-control\" type=\"text\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t\t<!-- Text input-->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\">Website or domain name</label>  
\t\t\t\t   <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-globe\"></i></span>
\t\t\t\t  <input name=\"website\" placeholder=\"Website or domain name\" class=\"form-control\" type=\"text\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t\t<!-- radio checks -->
\t\t\t\t <div class=\"form-group\">
\t\t\t\t<label class=\"col-md-4 control-label\">Do you have hosting?</label>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t    <div class=\"radio\">
\t\t\t\t        <label>
\t\t\t\t            <input type=\"radio\" name=\"hosting\" value=\"yes\" /> Yes
\t\t\t\t        </label>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"radio\">
\t\t\t\t        <label>
\t\t\t\t            <input type=\"radio\" name=\"hosting\" value=\"no\" /> No
\t\t\t\t        </label>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Text area -->
\t\t\t\t  
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\">Project Description</label>
\t\t\t\t    <div class=\"col-md-4 inputGroupContainer\">
\t\t\t\t    <div class=\"input-group\">
\t\t\t\t        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
\t\t\t\t        \t<textarea class=\"form-control\" name=\"comment\" placeholder=\"Project Description\"></textarea>
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t\t<!-- Success message -->
\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" id=\"success_message\">Success <i class=\"glyphicon glyphicon-thumbs-up\"></i> Thanks for contacting us, we will get back to you shortly.</div>

\t\t\t\t<!-- Button -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"col-md-4 control-label\"></label>
\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t    <button type=\"submit\" class=\"btn btn-warning\" >Send <span class=\"glyphicon glyphicon-send\"></span></button>
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t\t</form>
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
        return array (  53 => 25,  49 => 24,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="hero" id="home">*/
/*   <div class="inner">*/
/*     <div class="copy">*/
/*     	<h1 class="display-3">Welcome</h1>*/
/* 		{% content "welcome.md" %}*/
/* 	</div>*/
/*   </div>*/
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
/* 	<section id="About">*/
/* 		<div class="content">*/
/* 			<h1 class="display-3">About</h1>*/
/* 			<hr>*/
/* 			{% content "about.md" %}*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<div class="clearfix separator"><br/></div>*/
/* */
/* 	<section id="Projects">*/
/* 		<div class="content">*/
/* 			<h1 class="display-3">Projects</h1>*/
/* 			<hr>*/
/* 			<div class="row">*/
/* 			  <div class="col-md-4">*/
/* 			    <div class="card card-block">*/
/* 			      <span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="text-align:center"></span>*/
/* 			      <h4 class="card-title">Gather</h4>*/
/* 			      <p class="card-text">Reviewing the project and setting acceptable goals will help get us on the same page.</p>*/
/* 			    </div>*/
/* 			  </div>*/
/* */
/* 			  <div class="col-md-4">*/
/* 			    <div class="card card-block">*/
/* 			      <span class="glyphicon glyphicon-fire" aria-hidden="true" style="text-align:center; color:#E04646"></span>*/
/* 			      <h4 class="card-title">Forge</h4>*/
/* 			      <p class="card-text">A proven development process which will get your projects completed on time.</p>*/
/* 			    </div>*/
/* 			  </div>*/
/* */
/* 			  <div class="col-md-4">*/
/* 			    <div class="card card-block">*/
/* 			      <span class="glyphicon glyphicon-send" aria-hidden="true" style="text-align:center"></span>*/
/* 			      <h4 class="card-title">Deploy</h4>*/
/* 			      <p class="card-text">Completing and delivering the project.</p>*/
/* 			    </div>*/
/* 			  </div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	*/
/* 	<div class="clearfix separator"><br/></div>*/
/* */
/* 	<section id="Resume">*/
/* 		<div class="content">*/
/* 			<h1 class="display-3">Resume</h1>*/
/* 			<hr>*/
/* 			RESUME HERE*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<div class="clearfix separator"><br/></div>*/
/* */
/* 	<section id="Contact">*/
/* 			<div class="content">*/
/* 			<h1 class="display-3">Contact Me</h1>*/
/* 			<hr>*/
/* */
/* 			<form class="well form-horizontal" action="/" method="post"  id="contact_form">*/
/* 			<fieldset>*/
/* */
/* 				<!-- Text input-->*/
/* */
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label">First Name</label>  */
/* 				  <div class="col-md-4 inputGroupContainer">*/
/* 				  <div class="input-group">*/
/* 				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/* 				  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 				<!-- Text input-->*/
/* */
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label" >Last Name</label> */
/* 				    <div class="col-md-4 inputGroupContainer">*/
/* 				    <div class="input-group">*/
/* 				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/* 				  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 				<!-- Text input-->*/
/* 				       <div class="form-group">*/
/* 				  <label class="col-md-4 control-label">E-Mail</label>  */
/* 				    <div class="col-md-4 inputGroupContainer">*/
/* 				    <div class="input-group">*/
/* 				        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>*/
/* 				  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* */
/* 				<!-- Text input-->*/
/* 				       */
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label">Phone #</label>  */
/* 				    <div class="col-md-4 inputGroupContainer">*/
/* 				    <div class="input-group">*/
/* 				        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>*/
/* 				  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 				<!-- Text input-->*/
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label">Website or domain name</label>  */
/* 				   <div class="col-md-4 inputGroupContainer">*/
/* 				    <div class="input-group">*/
/* 				        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>*/
/* 				  <input name="website" placeholder="Website or domain name" class="form-control" type="text">*/
/* 				    </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 				<!-- radio checks -->*/
/* 				 <div class="form-group">*/
/* 				<label class="col-md-4 control-label">Do you have hosting?</label>*/
/* 				<div class="col-md-4">*/
/* 				    <div class="radio">*/
/* 				        <label>*/
/* 				            <input type="radio" name="hosting" value="yes" /> Yes*/
/* 				        </label>*/
/* 				    </div>*/
/* 				    <div class="radio">*/
/* 				        <label>*/
/* 				            <input type="radio" name="hosting" value="no" /> No*/
/* 				        </label>*/
/* 				    </div>*/
/* 				</div>*/
/* 				</div>*/
/* */
/* 				<!-- Text area -->*/
/* 				  */
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label">Project Description</label>*/
/* 				    <div class="col-md-4 inputGroupContainer">*/
/* 				    <div class="input-group">*/
/* 				        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>*/
/* 				        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>*/
/* 				  </div>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 				<!-- Success message -->*/
/* 				<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>*/
/* */
/* 				<!-- Button -->*/
/* 				<div class="form-group">*/
/* 				  <label class="col-md-4 control-label"></label>*/
/* 				  <div class="col-md-4">*/
/* 				    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>*/
/* 				  </div>*/
/* 				</div>*/
/* */
/* 			</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	</section>*/
/* </div>*/
