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
        echo $this->env->getExtension('CMS')->contentFunction("welcome.md"        , $context['__cms_content_params']        );
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

\t<section id=\"About\">
\t\t";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("about.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 22
        echo "\t</section>
\t
\t<div class=\"clearfix\"><br/></div>

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
\t
\t<div class=\"clearfix\"><br/></div>

\t<section id=\"Resume\">
\t\tMy resume would be listed here for download
\t</section>

\t<div class=\"clearfix\"><br/></div>

\t<section id=\"Contact\">
\t\t\t<form class=\"well form-horizontal\" action=\"/\" method=\"post\"  id=\"contact_form\">
\t\t\t<fieldset>

\t\t\t\t<!-- Form Name -->
\t\t\t\t<legend>Contact Me Today!</legend>

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
        return array (  50 => 22,  46 => 21,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section>*/
/* 	<div id="home" class="jumbotron">*/
/* 	  <div class="container">*/
/* 	    <h1 class="display-3">Welcome</h1>*/
/* 		{% content "welcome.md" %}*/
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
/* 	<section id="About">*/
/* 		{% content "about.md" %}*/
/* 	</section>*/
/* 	*/
/* 	<div class="clearfix"><br/></div>*/
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
/* 	*/
/* 	<div class="clearfix"><br/></div>*/
/* */
/* 	<section id="Resume">*/
/* 		My resume would be listed here for download*/
/* 	</section>*/
/* */
/* 	<div class="clearfix"><br/></div>*/
/* */
/* 	<section id="Contact">*/
/* 			<form class="well form-horizontal" action="/" method="post"  id="contact_form">*/
/* 			<fieldset>*/
/* */
/* 				<!-- Form Name -->*/
/* 				<legend>Contact Me Today!</legend>*/
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
/* 	</section>*/
/* </div>*/
