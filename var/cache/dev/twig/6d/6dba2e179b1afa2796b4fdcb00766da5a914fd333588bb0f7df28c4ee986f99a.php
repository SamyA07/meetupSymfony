<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_98cd367ea2eecbb2deb77c8ee96b175a8189adac1e128ed83188c923ec19c8e6 extends Twig_Template
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
        $__internal_204e74ee8f7b8b185628cfa6e9f7071d4b9a33ecd8b23b6d3a4758c4ec8e721a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204e74ee8f7b8b185628cfa6e9f7071d4b9a33ecd8b23b6d3a4758c4ec8e721a->enter($__internal_204e74ee8f7b8b185628cfa6e9f7071d4b9a33ecd8b23b6d3a4758c4ec8e721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7724055734532bf6849b6e68aef9dac07a7d057293e4915325cddb06c1d1e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7724055734532bf6849b6e68aef9dac07a7d057293e4915325cddb06c1d1e736->enter($__internal_7724055734532bf6849b6e68aef9dac07a7d057293e4915325cddb06c1d1e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_204e74ee8f7b8b185628cfa6e9f7071d4b9a33ecd8b23b6d3a4758c4ec8e721a->leave($__internal_204e74ee8f7b8b185628cfa6e9f7071d4b9a33ecd8b23b6d3a4758c4ec8e721a_prof);

        
        $__internal_7724055734532bf6849b6e68aef9dac07a7d057293e4915325cddb06c1d1e736->leave($__internal_7724055734532bf6849b6e68aef9dac07a7d057293e4915325cddb06c1d1e736_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
