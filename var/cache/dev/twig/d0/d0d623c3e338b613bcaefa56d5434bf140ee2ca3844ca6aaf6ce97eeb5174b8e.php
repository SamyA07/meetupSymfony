<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_487981bf662ed4082231ba7d604437b178e370e6681feecfa1be186f27716e5f extends Twig_Template
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
        $__internal_6f0f44036bbf53241df3247bf75687dbce03342a75ab250bebb75d8791b142a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0f44036bbf53241df3247bf75687dbce03342a75ab250bebb75d8791b142a0->enter($__internal_6f0f44036bbf53241df3247bf75687dbce03342a75ab250bebb75d8791b142a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_283a6d06d16b18aba7f048aaca2c5c0d3069c8e5b3c3dae8ca7d313b6ee76ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283a6d06d16b18aba7f048aaca2c5c0d3069c8e5b3c3dae8ca7d313b6ee76ecb->enter($__internal_283a6d06d16b18aba7f048aaca2c5c0d3069c8e5b3c3dae8ca7d313b6ee76ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_6f0f44036bbf53241df3247bf75687dbce03342a75ab250bebb75d8791b142a0->leave($__internal_6f0f44036bbf53241df3247bf75687dbce03342a75ab250bebb75d8791b142a0_prof);

        
        $__internal_283a6d06d16b18aba7f048aaca2c5c0d3069c8e5b3c3dae8ca7d313b6ee76ecb->leave($__internal_283a6d06d16b18aba7f048aaca2c5c0d3069c8e5b3c3dae8ca7d313b6ee76ecb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
