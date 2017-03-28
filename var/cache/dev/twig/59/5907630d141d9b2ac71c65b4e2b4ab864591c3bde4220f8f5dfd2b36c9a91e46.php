<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d819ad1ea57074ff2f41162cb635825c28603dd30bda87fb7484cab791a14bb5 extends Twig_Template
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
        $__internal_5dbd68f1ea23c8ce9cd4d30c4fcfee8d1cdb83e1600de08173b8592379344aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbd68f1ea23c8ce9cd4d30c4fcfee8d1cdb83e1600de08173b8592379344aae->enter($__internal_5dbd68f1ea23c8ce9cd4d30c4fcfee8d1cdb83e1600de08173b8592379344aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_decc4ab4a7c72761f134fcfba384c0f98dba6061d9b9d0749dc4ff06224929fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decc4ab4a7c72761f134fcfba384c0f98dba6061d9b9d0749dc4ff06224929fb->enter($__internal_decc4ab4a7c72761f134fcfba384c0f98dba6061d9b9d0749dc4ff06224929fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_5dbd68f1ea23c8ce9cd4d30c4fcfee8d1cdb83e1600de08173b8592379344aae->leave($__internal_5dbd68f1ea23c8ce9cd4d30c4fcfee8d1cdb83e1600de08173b8592379344aae_prof);

        
        $__internal_decc4ab4a7c72761f134fcfba384c0f98dba6061d9b9d0749dc4ff06224929fb->leave($__internal_decc4ab4a7c72761f134fcfba384c0f98dba6061d9b9d0749dc4ff06224929fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
