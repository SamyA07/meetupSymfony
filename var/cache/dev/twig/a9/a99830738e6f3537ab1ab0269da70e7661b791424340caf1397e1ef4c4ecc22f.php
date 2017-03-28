<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_63a39efcfbab460dbf7aafa4deb0bdf21633a4b16029e82e2e5a864d4dad3237 extends Twig_Template
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
        $__internal_01d8643e8f2e760bf93d8e293646fb9b6064bc6ee3881426d292155c69335f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d8643e8f2e760bf93d8e293646fb9b6064bc6ee3881426d292155c69335f28->enter($__internal_01d8643e8f2e760bf93d8e293646fb9b6064bc6ee3881426d292155c69335f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9d909c48e11f150d30e79e3217b07219586a457501c0681a61cbf0913150ca74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d909c48e11f150d30e79e3217b07219586a457501c0681a61cbf0913150ca74->enter($__internal_9d909c48e11f150d30e79e3217b07219586a457501c0681a61cbf0913150ca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_01d8643e8f2e760bf93d8e293646fb9b6064bc6ee3881426d292155c69335f28->leave($__internal_01d8643e8f2e760bf93d8e293646fb9b6064bc6ee3881426d292155c69335f28_prof);

        
        $__internal_9d909c48e11f150d30e79e3217b07219586a457501c0681a61cbf0913150ca74->leave($__internal_9d909c48e11f150d30e79e3217b07219586a457501c0681a61cbf0913150ca74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
