<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_beff339c502e54f26dbdb1a82cd68d5fc0fab2e9f72450a9c660d65ca809fcfa extends Twig_Template
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
        $__internal_595d5709b7fa96cb5da18182c7777dce1ee95535c4268cdfc199bfca8ecf6e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595d5709b7fa96cb5da18182c7777dce1ee95535c4268cdfc199bfca8ecf6e77->enter($__internal_595d5709b7fa96cb5da18182c7777dce1ee95535c4268cdfc199bfca8ecf6e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8238e6dddc0e0bbcfa8d4154191e39204c4eea1acbbbde2de419f0cff2909f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238e6dddc0e0bbcfa8d4154191e39204c4eea1acbbbde2de419f0cff2909f22->enter($__internal_8238e6dddc0e0bbcfa8d4154191e39204c4eea1acbbbde2de419f0cff2909f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_595d5709b7fa96cb5da18182c7777dce1ee95535c4268cdfc199bfca8ecf6e77->leave($__internal_595d5709b7fa96cb5da18182c7777dce1ee95535c4268cdfc199bfca8ecf6e77_prof);

        
        $__internal_8238e6dddc0e0bbcfa8d4154191e39204c4eea1acbbbde2de419f0cff2909f22->leave($__internal_8238e6dddc0e0bbcfa8d4154191e39204c4eea1acbbbde2de419f0cff2909f22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
