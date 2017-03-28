<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62bbb8bbcdae280c08b7ec519012024119886eb42a34066e68dba2aead4fb7d1 extends Twig_Template
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
        $__internal_f0602312cc821ac6ee6f916f21908916241cdd5da89f96ab71526b0b4fff16aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0602312cc821ac6ee6f916f21908916241cdd5da89f96ab71526b0b4fff16aa->enter($__internal_f0602312cc821ac6ee6f916f21908916241cdd5da89f96ab71526b0b4fff16aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e1097d7655b9280c63c14a35668a958c095bab2c8e115e816d7ec9272ca9fe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1097d7655b9280c63c14a35668a958c095bab2c8e115e816d7ec9272ca9fe5c->enter($__internal_e1097d7655b9280c63c14a35668a958c095bab2c8e115e816d7ec9272ca9fe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f0602312cc821ac6ee6f916f21908916241cdd5da89f96ab71526b0b4fff16aa->leave($__internal_f0602312cc821ac6ee6f916f21908916241cdd5da89f96ab71526b0b4fff16aa_prof);

        
        $__internal_e1097d7655b9280c63c14a35668a958c095bab2c8e115e816d7ec9272ca9fe5c->leave($__internal_e1097d7655b9280c63c14a35668a958c095bab2c8e115e816d7ec9272ca9fe5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
